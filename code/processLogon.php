<?php
session_start();


include "config.php";
include "Query_Injection.php";
include "QueryLibrary.php";

$user_email = "";
$password  = "";

$errorCount = 0;


if (isset($_POST['user_email']))
{
$user_email = $_POST['user_email'];

	if (strlen($user_email) < 5)
	{
		$errorCount = $errorCount + 1;
	}

}
else
{
// there is an errory with the user email - it might be blank or null
	$errorCount = $errorCount + 1;
}

if (isset($_POST['password']))
{
$password = $_POST['password'];

	if (strlen($password) < 5)
	{
		$errorCount = $errorCount + 1;
	}

}
else
{


// there is an errory with the user password - it might be blank or null
	$errorCount = $errorCount + 1;
}


// if there is an error - send them away from this page - to an error page. 
if ($errorCount > 0)
{
	header("Location: logonError.php");
	die();
}
else
{
echo "<h1> valid content provided </h1>";

	// check the logon details 

	$statusReturned = checkLogonDetails($conn,$user_email,$password);

	echo "<h2>Status is " . $statusReturned . "</h2>";

	if (($statusReturned = 'parent') or ($statusReturned = 'manager'))
	{
			// we want to store this in the session variables IN THE BROWSER. 


		if (!isset($_SESSION['loggedon'])) {
  				$_SESSION['loggedon'] = $statusReturned;   // assign the status. 
		} 
		else
		{
				$_SESSION['loggedon'] = $statusReturned;

		}
	}

	// we are going to redirect back to another page ... we are finished procesing the logon. 

	header("Location: index.php");
	die();


}

?>