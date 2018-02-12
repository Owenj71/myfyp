<?php

$conn = pg_connect("host=localhost port=5433 dbname=team user=postgres password='Whats that1'");

if (!$conn) {
  echo "An error occurred.\n";
  exit;
}


?>