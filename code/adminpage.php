<?php
session_start();

?>

<html>

<head>

	<title>Admin Page</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style1.css">

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="index.php"><img src = "logo.jpg" height="100" width="100"></a>
	  <a class="navbar-brand" href="index.php">Moorfield GAA</a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">

				<li class="nav-item active">
	        <a class="nav-link" href="index.php">Home </a>
	      </li>

				<li class="nav-item">
	        <a class="nav-link" href="adminpage.php">Admin</a>
	      </li>

			  <li class="nav-item">
	        <a class="nav-link" href="managerpage.php">Manager</a>
	      </li>

			  <li class="nav-item">
	        <a class="nav-link" href="parentpage.php">Parent</a>
	      </li>
	    </ul>

	  </div>
	</nav>

<div>

	<h1>this is the body</h1>
	<p>some stuff</p>

	<div class="testclass">

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

	</div>


</div>

</body>

<div class="footer-bottom">
    <div class="container">
        <div class="row">
    		<div class="col-md-12 widget">© 2014 | This is my footer </div>
        </div>
    </div>
</div>

</html>
