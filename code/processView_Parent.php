<?php
include "config.php";
include "Query_Injection.php";
include "QueryLibrary.php";

$parent_id = -1;
$parent_fname = "Default Name";
$parent_sname = "Default Surname";
$password = "Default Password";
$address1 = "Default Address";
$address2 = "Default Address 2";
$phonenumber = -1;
$user_email = "Default Email";


// we assume that there is no errors and the insert has worked. 

header("Location: test_inject_parent.php");
die();

?>