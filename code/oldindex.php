<?php
session_start();

?>

<html>

<head>

	<title>Moorefield GAA</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>

</head>





<div class="jumbotron text-center">
		
		<h1>Moorefield GAA Player\Manager\Parent Database</h1>
		<img src = "logo.jpg">

</div>
<?php

		if (!isset($_SESSION['loggedon'])) {
  				// this person is NOT logged on to the system. 
			echo "<b>Hello... visitor ... not logged on</b><br/>";

		} 
		else
		{
			$status = $_SESSION['loggedon'];
			echo "<b>Hello...." . $status . "</b><br/>";
		}

?>



		<p>
			<h2>Add Functionality (Admin level only)</h1>
		<ul>

			<li><b>Add a new Parent to the database</b> <a href ="add_new_parent.php">[Add Parent Page]<a></li>
			<li><b>Add a new Manager to the database</b> <a href ="add_new_manager.php">[Add Manager Page]<a></li>
			<li><b>Add a new Child to the database</b> <a href ="add_new_child.php">[Add Child Page]<a></li>
			<li><b>Add a new Team to the database</b> <a href ="add_new_team.php">[Add Team Page]<a></li>
		    <li><b>View the Parent table in the database </b> <a href ="test_inject_parent.php">[View All Parents Registered]<a></li>
		    <li><b>View the Mananger table in the database </b> <a href ="test_inject_manager.php">[View All Managers Registered]<a></li>
		    <li><b>View the Child table in the database </b> <a href ="test_inject_child.php">[View All Children Registered]<a></li>
		    <li><b>Update the Parent details in the database </b> <a href ="test_inject_team.php">[View A List Of The Teams]<a></li>
		    <li><b>Update the Child details in the database </b> <a href ="test_inject_team.php">[View A List Of The Teams]<a></li>
		    <li><b>Update the Manager details in the database </b> <a href ="test_inject_team.php">[View A List Of The Teams]<a></li>
		    <li><b>Update the Team details in the database </b> <a href ="test_inject_team.php">[View A List Of The Teams]<a></li>
		    <li><b>Delete a Parent from the database </b> <a href ="test_inject_team.php">[View A List Of The Teams]<a></li>
		    <li><b>Delete a Child from the team the Team table in the database </b> <a href ="test_inject_team.php">[View A List Of The Teams]<a></li>


            <li> ... next function .. </li>
			<li><b>Logout</b> <a href = "logout.php">[Logout]<a></li>
			<li><b>Logon</b> <a href = "logon.php">[Logon]<a></li>
		</ul>

	</p>



	<p>
		<h2>View Functionality (Parent level only)</h1>
		<ul>

		<li><b>Update My Information</b> <a href = "test_inject_parent.php">[Add Parent Page]<a></li>
		<li><b>Update My Childs Information</b> <a href = "test_inject_child.php">[Add Parent Page]<a></li>
        <li><b>View MY Childs Team Information</b> <a href = "test_inject_team.php">[Add Parent Page]<a></li>


		<li> ... next function .. </li>
	</ul>

	</p>




	<p>
		<h2>View Functionality (Manager)</h1>
	<ul>

	<li><b>View the Parent of my team in the database </b> <a href = "test_inject_parent.php">[View Parent Table]<a></li>
	<li><b>View the Manager table in the database </b> <a href = "test_inject_manager.php">[View Manager Table]<a></li>
	<li><b>View the Team table in the database </b> <a href = "test_inject_manager.php">[View Manager Table]<a></li>
	<li><b>Add a Parent to the database </b> <a href = "test_inject_manager.php">[View Manager Table]<a></li>
	<li><b>Add a Child to the team </b> <a href = "test_inject_manager.php">[View Manager Table]<a></li>
	<li><b>Get a list of all parents phonenumbers </b> <a href = "test_inject_manager.php">[View Manager Table]<a></li>
	<li><b>Send a text message to all parents of team mambers</b> <a href = "test_inject_manager.php">[View Manager Table]<a></li>

	<li> ... next function ... </li>

	<li> ... next function .. </li>
	</ul>

	</p>



	<p>
		<h2>Adding Relationships between Tables/Entities</h1>
	<ul>

	<li><b>Add a new parent child relationship in the database </b> <a href = "addNewChildParentRelationship.php">[Add New Child/Parent]<a></li>

	</ul>

	</p>

</html>