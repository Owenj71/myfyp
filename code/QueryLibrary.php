<?php

include "config.php";


/*
Description of what this query does.. 
This query checks the parents id against the MyChild id and returns the parent of each child ordered by the parents surname ascending
*/
function whoisParentOfChild($conn)
{

$QueryString = "SELECT Parent.parent_fname,Parent.parent_sname,Child.child_fname,child.child_sname FROM Parent, Child, MyChild WHERE (Parent.parent_id = MyChild.parent_id) and (Child.child_id = MyChild.child_id) order by Parent.parent_sname";


$result = pg_query($conn, $QueryString);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

echo "<table border = '2'>";
echo "<tr><th>Parent FirstName</th><th>Parent Surname</th><th>Child First name</th><th>Child Surname</th></tr>";
while ($row = pg_fetch_row($result)) {

	// $row is an array ... linear array

	echo "<tr>";
	for ($i = 0; $i < count($row); $i++)
	{
		echo "<td>" . $row[$i] . "</td>";

	}
	echo "</tr>";

 
} // while loop end 
  echo "</table>";

} // close function. 

function Childs_Team($conn)
{

$QueryString = "SELECT child.child_sname,child.child_fname,team.team_name,team.skill_test FROM Child, MyTeam, Team WHERE child.child_id = MyTeam.child_id and (Team.team_id = MyTeam.team_id) order by team.team_name,child.child_sname";

 


$result = pg_query($conn, $QueryString);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

echo "<table border = '2'>";
echo "<tr><th>Child FirstName</th><th>Child Surname</th><th>Teamname</th><th>Skill Test</th></tr>";
while ($row = pg_fetch_row($result)) {

	// $row is an array ... linear array

	echo "<tr>";
	for ($i = 0; $i < count($row); $i++)
	{
		echo "<td>" . $row[$i] . "</td>";

	}
	echo "</tr>";

 
} // while loop end 
  echo "</table>";

} // close function.

function My_Team($conn)
{

$QueryString = "SELECT MyTeam.child_id,MyTeam.team_id FROM MyTeam order by MyTeam.team_id";
 


$result = pg_query($conn, $QueryString);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

echo "<table border = '2'>";
echo "<tr><th>MyTeam team_id</th><th>MyTeam child_id</th></tr>";
while ($row = pg_fetch_row($result)) {

	// $row is an array ... linear array

	echo "<tr>";
	for ($i = 0; $i < count($row); $i++){
		echo "<td>" . $row[$i] . "</td>";

	}
	echo "</tr>";

 
} // while loop end 
  echo "</table>";

} // close function.

/*
Description of what this query does.. 
This query checks the Parent,Child, Team, Myteam tables then checks the under 14 team 
and returns all the players on the under 14 team ordered by their first name descending
*/

function Under14_TeamParents($conn)
{

$QueryString = "SELECT Parent.parent_fname,parent.parent_sname,parent.phonenumber,child.child_fname,child.child_sname,team.team_name FROM Parent,Child,Team,MyTeam,MyChild WHERE (child.child_id = MyTeam.child_id) and (Team.team_id = MyTeam.team_id) and (Parent.parent_id = MyChild.parent_id) and (Child.child_id = MyChild.child_id)and team.team_name = 'U/14'ORDER BY Child.child_fname;";
 
$result = pg_query($conn, $QueryString);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

echo "<table border = '2'>";
echo "<tr><th>Parent Firstname</th><th>Parent Surname</th><th>Parent Phonenumber</th><th>Child Firstname</th><th>Childs Surname</th><th>Teamname</th></tr>";
while ($row = pg_fetch_row($result)) {

	// $row is an array ... linear array

	echo "<tr>";
	for ($i = 0; $i < count($row); $i++){
		echo "<td>" . $row[$i] . "</td>";

	}
	echo "</tr>";

 
} // while loop end 
  echo "</table>";

} // close function.

/*
Description of what this query does.. 
This query checks the Parent,Child,Team,Myteam tables then checks the under 14 team 
and returns all the distinct parents with children on the under 14 team ordered by the parents surname descending
*/

function Under14_ParentInfo($conn)
{

$QueryString = "SELECT DISTINCT Parent.parent_fname,parent.parent_sname,parent.phonenumber,team.team_name FROM Parent,Child,Team,MyTeam,MyChild WHERE (child.child_id = MyTeam.child_id) and (Team.team_id = MyTeam.team_id) and (Parent.parent_id = MyChild.parent_id) and (Child.child_id = MyChild.child_id) and team.team_name = 'U/14' ORDER BY Parent.parent_sname;";
 
$result = pg_query($conn, $QueryString);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

echo "<table border = '2'>";
echo "<tr><th>Parent Firstname</th><th>Parent Surname</th><th>Parent Phonenumber</th><th>Team Name</th></tr>";
while ($row = pg_fetch_row($result)) {

	// $row is an array ... linear array

	echo "<tr>";
	for ($i = 0; $i < count($row); $i++){
		echo "<td>" . $row[$i] . "</td>";

	}
	echo "</tr>";

 
} // while loop end 
  echo "</table>";

} // close function.

/*
Description of what this query does.. 
This query checks the Child,Team,Myteam,Manages,Manager tables then checks which manager manages which team
and returns a list of all teams and who manages each team ordered by the team name and managers surname
*/

function MyManager($conn)
{

$QueryString = "SELECT Child.child_fname,child.child_sname,team.team_name,manager.manager_fname, manager.manager_sname FROM Child, MyTeam, Team, Manages, Manager WHERE (child.child_id = MyTeam.child_id) and (Team.team_id = MyTeam.team_id)AND (Team.team_id = manages.team_id) and (manager.manager_id = manages.manager_id)order by team_name,manager.manager_sname;";

 
$result = pg_query($conn, $QueryString);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

echo "<table border = '2'>";
echo "<tr><th>Child FirstName</th><th>Child Surname</th><th>Team Name</th><th>Manager FirstName</th><th>Manager Surname</th></tr>";
while ($row = pg_fetch_row($result)) {

	// $row is an array ... linear array

	echo "<tr>";
	for ($i = 0; $i < count($row); $i++){
		echo "<td>" . $row[$i] . "</td>";

	}
	echo "</tr>";

 
} // while loop end 
  echo "</table>";

} // close function.

/*
Description of what this query does.. 
This query checks the Child,Team,Myteam,Manages,Manager,Parent,Mychild tables then checks distinct parents that have children on distinct managers teams
and returns a list of all the teams ordered by the team name and the managers surname
*/

function ParentManager($conn)
{

$QueryString = "SELECT DISTINCT Parent.parent_fname,parent.parent_sname,team.team_name,manager.manager_fname, manager.manager_sname FROM Child, MyTeam, Team, Manages, Manager,Parent,MyChild WHERE (child.child_id = MyTeam.child_id) and (Team.team_id = MyTeam.team_id)AND (Team.team_id = manages.team_id) and (manager.manager_id = manages.manager_id) and (Parent.parent_id = MyChild.parent_id) and (Child.child_id = MyChild.child_id)order by team_name,manager.manager_sname;";

 $result = pg_query($conn, $QueryString);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

echo "<table border = '2'>";
echo "<tr><th>Parent FirstName</th><th>Parent Surname</th><th>Team Name</th><th>Manager FirstName</th><th>Manager Surname</th></tr>";
while ($row = pg_fetch_row($result)) {

	// $row is an array ... linear array

	echo "<tr>";
	for ($i = 0; $i < count($row); $i++){
		echo "<td>" . $row[$i] . "</td>";

	}
	echo "</tr>";

 
} // while loop end 
  echo "</table>";

} // close function.


function printContentsOfTable($conn,$tableName,$tableNameTxt)
{

$QueryString = "SELECT * from " . $tableName;


 $result = pg_query($conn, $QueryString);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
//echo "<h2>Contents of the table " . $tableNameTxt . "</h2>";
echo "<table border = '2'>";
while ($row = pg_fetch_row($result)) {

	// $row is an array ... linear array

	echo "<tr>";
	for ($i = 0; $i < count($row); $i++){
		echo "<td>" . $row[$i] . "</td>";

	}
	echo "</tr>";

 
} // while loop end 
  echo "</table>";

} // close function.
/** get the names of children from the child table **/

function getChildrenDetailsFromChildTable($conn)
{

$arrayOfResults  = array(); // create an empty array. 

$QueryString = "select child_id, child_fname, child_sname from child order by child_sname";


 $result = pg_query($conn, $QueryString);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {

	// $row is an array ... linear array

	// we know that row[0] is the child id, row[1] is the child fname, etc

	$thisChildID = $row[0];
	$thisChildFName = $row[1];
	$thisChildSName = $row[2];

	$arrayOfResults[] = array($thisChildID,$thisChildFName,$thisChildSName);
	// we are building an array of arrays - each array is a row in the table output from the query
 
} // while loop end 
  
  return $arrayOfResults;

} // close function.




function getParentDetailsFromParentTable($conn)
{

$arrayOfResults  = array(); // create an empty array. 

$QueryString = "select parent_id, parent_fname, parent_sname from parent order by parent_sname";


 $result = pg_query($conn, $QueryString);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {

	// $row is an array ... linear array

	// we know that row[0] is the parent id, row[1] is the parent fname, etc

	$thisParentID = $row[0];
	$thisParentFName = $row[1];
	$thisParentSName = $row[2];

	$arrayOfResults[] = array($thisParentID,$thisParentFName,$thisParentSName);
	// we are building an array of arrays - each array is a row in the table output from the query
 
} // while loop end 
  
  return $arrayOfResults;

} // close function.


function checkLogonDetails($conn,$user_email,$password)
{

	$status = "unknown";
// first check the parents table

$result = pg_prepare($conn, "my_query", 'SELECT count(*) FROM Parent where (user_email = $1) and (password = $2)');

// Execute the prepared query.  Note that it is not necessary to escape
// the string "Joe's Widgets" in any way
$result = pg_execute($conn, "my_query", array($user_email,$password));


while ($row = pg_fetch_row($result)) {

	if ($row[0] == 1)
	{
			// we have found a parent. 1 parent that matches this email address. 
		$status = "parent";
	}

} // while loop end 
 


$result2 = pg_prepare($conn, "my_query2", 'SELECT count(*) FROM manager where (user_email = $1) and (password = $2)');

// Execute the prepared query.  Note that it is not necessary to escape
// the string "Joe's Widgets" in any way
$result2 = pg_execute($conn, "my_query2", array($user_email,$password));


while ($row = pg_fetch_row($result2)) {

	if ($row[0] == 1)
	{
			// we have found a parent. 1 parent that matches this email address. 
		$status = "manager";
	}

} // while loop end 
 
return $status;


} // close function.




 ?>