<?php
include "config.php";
include "Query_Injection.php";
include "QueryLibrary.php";

//$parent_id = -1;
$parent_fname = "Default Name";
$parent_sname = "Default Surname";
$password = "Default Password";
$address1 = "Default Address";
$address2 = "Default Address 2";
$phonenumber = -1;
$user_email = "Default Email";

/*if (isset($_POST['parent_id']))
{
$parent_id = $_POST['parent_id'];
}
*/
if (isset($_POST['user_email']))
{
$user_email = $_POST['user_email'];
}

if (isset($_POST['password']))
{
$password = $_POST['password'];
}

if (isset($_POST['parent_fname']))
{
$parent_fname = $_POST['parent_fname'];
}
if (isset($_POST['parent_sname']))
{
$parent_sname = $_POST['parent_sname'];
}
if (isset($_POST['address1']))
{
$address1 = $_POST['address1'];
}
if (isset($_POST['address2']))
{
$address2 = $_POST['address2'];
}

if (isset($_POST['phonenumber']))
{
$phonenumber = $_POST['phonenumber'];
}
// we can do additional error checking here on the variables. 

// let's assume at this point - without checking that we have VALID input for the creation of the new parent. 

// now we call the relevant function to insert this into the database

parent_Add_From_HTML_Form($conn,$user_email,$parent_fname,$parent_sname,$password,$address1,$address2,$phonenumber);

// we assume that there is no errors and the insert has worked. 

header("Location: test_inject_parent.php");
die();

?>