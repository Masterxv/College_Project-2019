<?php

$databaseurl ="localhost";
$username = "root";
$password = "";
$select_db = "Product_data";

$connection = mysqli_connect($databaseurl, $username, $password, $select_db);

if(!$connection){
  echo "<center><h1>Error Connecting  to The Database</h1></center>";
}

 ?>
