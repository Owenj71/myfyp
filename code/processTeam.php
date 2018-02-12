<?php
include "config.php";
include "Query_Injection.php";
include "QueryLibrary.php";

//$team_id = "Default Team_Id";
$team_name = "Default Team_name";
$skill_test = "Default Skill_test";
$fitness_test = "Default Fitness_test";




/*if (isset($_POST['team_id']))
{
$team_id = $_POST['team_id'];
}*/

if (isset($_POST['team_name']))
{
$team_name = $_POST['team_name'];
}

if (isset($_POST['skill_test']))
{
$skill_test = $_POST['skill_test'];
}

if (isset($_POST['fitness_test']))
{
$fitness_test = $_POST['fitness_test'];
}

// we can do additional error checking here on the variables. 

// let's assume at this point - without checking that we have VALID input for the creation of the new parent. 

// now we call the relevant function to insert this into the database

team_Add_From_HTML_Form($conn,$team_name,$skill_test,$fitness_test);

// we assume that there is no errors and the insert has worked. 

header("Location: test_inject_team.php");
die();

?>