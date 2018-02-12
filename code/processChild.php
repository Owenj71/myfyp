<?php
include "config.php";
include "Query_Injection.php";
include "QueryLibrary.php";

//$child_id = -1;
$child_fname = "Default Firstame";
$child_sname = "Default Surname";
$date_of_birth = "Default Date_Of_Birth";
$skill_test = "Default Skill_Test" ;
$fitness_test = "Default Fitness_Test";
$medical_issue = "Default Medical_Issue";
$medical_match = "Default Medical_Match";
$hospital_preference = "Default Hospital_Preference";
$membership = "Default Membership";





if (isset($_POST['child_fname']))
{
$child_fname = $_POST['child_fname'];
}

if (isset($_POST['child_sname']))
{
$child_sname = $_POST['child_sname'];
}

if (isset($_POST['date_of_birth']))
{
$date_of_birth = $_POST['date_of_birth'];
}

if (isset($_POST['membership']))
{
$membership = $_POST['membership'];
}

if (isset($_POST['medical_issue']))
{
$medical_issue = $_POST['medical_issue'];
}

if (isset($_POST['medical_match']))
{
$medical_match = $_POST['medical_match'];
}

if (isset($_POST['hospital_preference']))
{
$hospital_preference = $_POST['hospital_preference'];
}


if (isset($_POST['fitness_test']))
{
$fitness_test = $_POST['fitness_test'];
}

if (isset($_POST['skill_test']))
{
$skill_test = $_POST['skill_test'];
}



// we can do additional error checking here on the variables. 

// let's assume at this point - without checking that we have VALID input for the creation of the new parent. 

// now we call the relevant function to insert this into the database

child_Add_From_HTML_Form($conn,$child_fname,$child_sname,$date_of_birth,$skill_test,$fitness_test,$medical_issue,$medical_match,$hospital_preference,$membership);

// we assume that there is no errors and the insert has worked. 

header("Location: test_inject_child.php");
die();

?>