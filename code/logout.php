<h1>Logout of the Moorefield GAA Management System</h1>


<?php
session_start();
// Finally, destroy the session.
session_destroy();

header("Location: index.php");
die();

?>


