<?php
include('db.php');

$category = $_POST['addcat'];

$query = "INSERT INTO  product_cat (cat_name)values('$category')";

$result = mysqli_query($connection,$query);

if($result){

    echo "<script>";
    echo "alert('Cat added Sucessfully');";
    echo "</script>";
    header('Location: ../admin/index.php');

}else{

    echo "<script>";
    echo "alert('Problem Adding In category')";
    echo "</script>";

}












?>