<!-- <?php include('../error.php'); ?>
 -->
<?php include('../includes/db.php'); 


if($_SERVER['REQUEST_METHOD'] =='POST'){


    $product_title = $_POST['product_title'];
    $can_compare = $_POST['can_compare'];
    $product_lowest_price = $_POST['product_lowest_price'];
    $product_link = $_POST['product_link'];
    $product_id =  $_POST['product_id'];
    $product_category =  $_POST['product_category'];
    $product_sub_category =  $_POST['product_sub_category'];
    $product_image =$_POST['product_image'];
    $product_rating = $_POST['product_rating'];

   //echo ($product_title);
    //echo ($product_lowest_price);

    $insertdata = "INSERT into product_temp()values('$product_title','$can_compare','$product_lowest_price','$product_link','$product_id','$product_category','$product_sub_category',    $product_rating,'$product_image','new')";

    $execquery = mysqli_query($connection,$insertdata);

    if($execquery){

        echo "insert into databse";
        
    }else{

        echo "problem in inserting into datbase";
       
        echo (mysqli_error($connection));
       

    }
}

?>



