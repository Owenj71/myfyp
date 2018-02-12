<?php
include "config.php";
include "Query_Injection.php";
include "QueryLibrary.php";

//$manager_id = "Default Manager_id"
$user_email = "Default Email";
$manager_fname = "Default Firstame";
$manager_sname = "Default Surname";
$phonenumber = -1;
$user_password = "Default Password";

/*if (isset($_POST['manager_id']))
{
$manager_id= $_POST['manager_id'];
}*/

if (isset($_POST['user_email']))
{
$user_email = $_POST['user_email'];
}

if (isset($_POST['manager_fname']))
{
$manager_fname = $_POST['manager_fname'];
}

if (isset($_POST['manager_sname']))
{
$manager_sname = $_POST['manager_sname'];
}

if (isset($_POST['phonenumber']))
{
$phonenumber = $_POST['phonenumber'];
}

if (isset($_POST['user_password']))
{
$user_password = $_POST['user_password'];
}
// we can do additional error checking here on the variables. 

// let's assume at this point - without checking that we have VALID input for the creation of the new parent. 

// now we call the relevant function to insert this into the database

manager_Add_From_HTML_Form($conn,$user_email ,$manager_fname,$manager_sname,$phonenumber,$user_password);

// we assume that there is no errors and the insert has worked. 

header("Location: test_inject_manager.php");
die();

?>