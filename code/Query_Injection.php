<?php

include "config.php";



//function nam

function parent_Add_From_HTML_Form($conn,$User_Email,$Parent_Fname,$Parent_Sname,$Password,$Address1,$Address2,$Phonenumber)
{

//$parent_id = $Parent_Id;
$user_email = $User_Email;
$parent_fname = $Parent_Fname;
$parent_sname = $Parent_Sname;
$password = $Password;
$address1 = $Address1;
$address2 = $Address2;
$phonenumber = $Phonenumber;


//created a template
$query = "INSERT INTO parent (user_email,parent_fname,parent_sname,password,address1,address2,phonenumber) VALUES($1, $2, $3, $4, $5, $6, $7)"; 
//prepare a statement
pg_prepare($conn, "prepare1", $query) 
    or die ("Cannot prepare statement\n"); 

//ececute the statemant
pg_execute($conn, "prepare1", array($user_email,$parent_fname,$parent_sname,$password,$address1,$address2,$phonenumber))
    or die ("Cannot execute statement\n"); 
//success
echo "Row successfully inserted\n";

// close function.

}

function manager_Add_From_HTML_Form($conn,$User_Email,$Manager_Fname,$Manager_Sname,$Phonenumber,$User_Password)
{

//$manager_id = $Manager_Id;
$user_email = $User_Email;
$manager_fname = $Manager_Fname;
$manager_sname = $Manager_Sname;
$phonenumber = $Phonenumber;
$user_password = $User_Password;


//created a template
$query = "INSERT INTO manager(user_email,manager_fname,manager_sname,phonenumber,user_password) VALUES($1, $2, $3, $4, $5)"; 
//prepare a statement
pg_prepare($conn, "prepare1", $query) 
    or die ("Cannot prepare statement\n"); 

//ececute the statemant
pg_execute($conn, "prepare1", array($user_email, $manager_fname, $manager_sname,$phonenumber,$user_password))
    or die ("Cannot execute statement\n"); 
//success
echo "Row successfully inserted\n";

// close function.

}

function child_Add_From_HTML_Form($conn,$Child_Fname,$Child_Sname,$Date_Of_Birth,$Skill_Test,$Fitness_Test,$Medical_Issue,$Medical_Match,$Hospital_Preference,$Membership)
{

$child_fname = $Child_Fname;
$child_sname = $Child_Sname;
$date_of_birth = $Date_Of_Birth;
$skill_test = $Skill_Test;
$fitness_test = $Fitness_Test;
$medical_issue = $Medical_Issue;
$medical_match = $Medical_Match;
$hospital_preference = $Hospital_Preference;
$membership = $Membership;


//created a template
$query = "INSERT INTO child(child_fname,child_sname,date_of_birth,skill_test,fitness_test,medical_issue,medical_match,hospital_preference,membership)VALUES($1, $2, $3, $4, $5, $6, $7, $8, $9)"; 
//prepare a statement 
pg_prepare($conn, "prepare1", $query) 
    or die ("Cannot prepare statement\n"); 

//ececute the statemant
pg_execute($conn, "prepare1", array($child_fname,$child_sname,$date_of_birth,$skill_test,$fitness_test,$medical_issue,$medical_match,$hospital_preference,$membership))
	 or die ("Cannot execute statement\n"); 
//success
echo "Row successfully inserted\n";

// close function.

}

function Team_Add_From_HTML_Form($conn,$Team_Name,$Skill_Test,$Fitness_Test)
{


//$team_id = $Team_Id;
$team_name = $Team_Name;
$skill_test = $Skill_Test;
$fitness_test = $Fitness_Test;



//created a template
$query = "INSERT INTO team(team_name,skill_test,fitness_test)VALUES($1, $2, $3)"; 
//prepare a statement
pg_prepare($conn, "prepare1", $query) 
    or die ("Cannot prepare statement\n"); 

//ececute the statemant
pg_execute($conn, "prepare1", array($team_name,$skill_test,$fitness_test))
    or die ("Cannot execute statement\n"); 
//success
echo "Row successfully inserted\n";

// close function.

}


/*
This is a prepared statement that adds a row to the parent table with data inserted
*/
function parent_Add($conn,$ParentID)
{


$parent_id = $ParentID;
$parent_fname = "Jenny";
$parent_sname = "Kelly";
$password = "cool";
$address1 = "23 The Close";
$address2 = "Liffey Hall";
$phonenumber = rand(100000,10000000);


//created a template
$query = "INSERT INTO parent VALUES($1, $2, $3, $4, $5, $6, $7)"; 
//prepare a statement
pg_prepare($conn, "prepare1", $query) 
    or die ("Cannot prepare statement\n"); 

//ececute the statemant
pg_execute($conn, "prepare1", array($parent_id, $parent_fname, $parent_sname,$password,$address1,$address2,$phonenumber))
    or die ("Cannot execute statement\n"); 
//success
echo "Row successfully inserted\n";

// close function.

}

?>

