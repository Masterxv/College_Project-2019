<?php
 include('../includes/db.php'); 

$id = $_GET['id'];
//echo ($id);
$query="Delete from product_cat where cat_id = '$id' ";

$result = mysqli_query($connection, $query);

if($result){

    echo "Product Deleted";
    header('Location: ../admin/fetch.php');

    
}else{
    echo "problem in deleteing Product ";
    echo "<br>Product Id :$id";
   // header('Location: ../admin/fetch.php');
}

?>