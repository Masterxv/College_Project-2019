<?php
 include('../includes/db.php'); 

$id = $_GET['id'];
//echo ($id);
$query="Delete from primary_product where product_id = '$id' ";
$querytwo="Delete from  product_data where product_id = '$id' ";

$result = mysqli_query($connection, $query);
$resulttwo = mysqli_query($connection, $querytwo);

if($result && $resulttwo){

    echo "Product Deleted";
    header('Location: ../admin/fetch.php');

    
}else{
    echo "problem in deleteing Product ";
    echo "<br>Product Id :$id";
    header('Location: ../admin/fetch.php');
}

?>