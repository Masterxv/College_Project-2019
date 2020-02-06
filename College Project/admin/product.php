<?php 
include('../product/apikey.php');

$dataurl = "https://price-api.datayuge.com/api/v1/compare/list?api_key=7ien9iQ3SF0ldgp4vUUnnplJyJqJZMAxq0k &sub_category=mobile&sort=New";
$getdataurl = file_get_contents($dataurl);
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>

      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="en-uk, english">
      <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
      <title>Search Result for iphone 6s | MySmartPrice</title>
      <link rel='preconnect' href='https://assets.mspcdn.net/' />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js" Type="text/javascript"></script>
      <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>
      <script type="text/javascript">
               $('.Update').ready(function(){
                 $("button").click(function(){

                  var data = <?php echo($getdataurl);?>

                  for(var i=0; i<data.data.length; i++){

                  $.ajax({  
                      type: 'POST',  
                      url: 'newproduct.php', 
                      data: { product_title: data.data[i].product_title, can_compare: data.data[i].can_compare, product_lowest_price: data.data[i].product_lowest_price, product_link: data.data[i].product_link, product_id: data.data[i].product_id, product_category: data.data[i].product_category, product_sub_category: data.data[i].product_sub_category, product_rating: data.data[i].product_rating, product_image: data.data[i].product_image},
                      success: function(response) {
                           console.log(response);
                      }
                  });

                  }

                 });
               });
      </script>>
</head>
<body>
   <center>
      <h3 style="font-size: 40px; ">Product Update </h3>
      <button id="Update">Update New Product</button>
      <br>
         <br>
      <form action="delete.php">
        <input type="submit" class="deleteproductdetails" value="Delete Details" style="font-size: 18px; ">
      </form>
   </center>
</body>
</html>    
    
    