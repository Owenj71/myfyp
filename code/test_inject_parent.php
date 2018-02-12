<?php


include "config.php";
include "Query_Injection.php";
include "QueryLibrary.php";

?>

<h1>Welcome to the GAA Club Database Application</h1>

<h2>Showing the updated parents table</h2>

<?php

// calling on function (printContentsOfTable) to print the parents table

printContentsOfTable($conn,'Parent','PARENT');

// close the connection at the bottom of the page when we are all finished. 
pg_close($conn);

echo "<br/>connection to the database closed" 

 ?>

 <HR/>

 <p>
Go back to the main page [<a href = "index.php">Home</a>]
 </p>


