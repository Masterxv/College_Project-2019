<?php
include('db.php');

//All the Form name

$product_name = mysqli_real_escape_string($connection, $_POST['npname']);        
$product_price = mysqli_real_escape_string($connection,$_POST['nprice']); 
$imgurl = mysqli_real_escape_string($connection,$_POST['nimg']); 
$upload_img_url =mysqli_real_escape_string($connection,$_POST['pcustomurl']); 
$flipkart = mysqli_real_escape_string($connection,$_POST['storeone']); 
$amazon = mysqli_real_escape_string($connection,$_POST['storetwo']); 
$snapdeal = mysqli_real_escape_string($connection,$_POST['storethree']); 
$product_type = mysqli_real_escape_string($connection,$_POST['type']); 
$brand = mysqli_real_escape_string($connection,$_POST['brand']); 
$product_idgen = rand(500,10000);
$later = false;
$result = '';
$execsecquery='';

if(filter_var($flipkart, FILTER_VALIDATE_URL) && filter_var($amazon, FILTER_VALIDATE_URL) && filter_var($snapdeal, FILTER_VALIDATE_URL)) {
  $GLOBALS['urlvalid']='validurl';
  $later = true;

}else{

  $later = false;

}

if(isset($product_price) && isset($imgurl)){

  
  $query = "INSERT INTO primary_product(product_id,product_name,product_price,product_type,Brand)values('$product_idgen','$product_name','$product_price','$product_type','$brand')";
  $querytwo = "INSERT INTO product_data(product_id,imgurl_one,imgurl_two,imgurl_three,flipkart_url,amazon_url,snapdeal_url)values('$product_idgen','$imgurl','$upload_img_url','notdefine','$flipkart','$amazon','$snapdeal')";

  $checkid = "select product_id from primary_product where product_id ='$product_idgen'";
  $check = mysqli_query($connection, $checkid);

  $count = mysqli_fetch_row($check);

  if($count>0){

      echo "Product Already exists";

  }else{

    if($later){

          $result =  mysqli_query($connection, $query);
          $execsecquery = mysqli_query($connection,$querytwo);

    }

  if($result && $execsecquery){
    header('Location: ../admin/index.php');
    //echo "Inserted Into Db";
  }else{
    header('Location: ../admin/index.php');
    echo "Invalid Store Url ";
  }

  }

}




































 ?>
