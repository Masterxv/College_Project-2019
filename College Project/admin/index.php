<?php  include('../includes/db.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="type/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Admin Page</title>
</head>
<body>
    <div class="container">
    <div class="alert alert-success" role="alert">
       Welcome to Product Inventry
</div>

<div class="breadcrumb">
  <form action="../includes/addcat.php" method="POST">
    <input type="text" placeholder="Enter Category" class="form-control" name="addcat" required="">
    <br>
    <input type="submit" value="Add Category" class="btn btn-primary">
  </form>
</div>
<div class="breadcrumb">
    <h2>Latest Trending Product Update</h2>
</div>

<form action="../includes/Pro.php" method="post">

  <div class="form-group">
  <select class="form-control" id="exampleFormControlSelect1" name="userselectedcat">

  <?php

    $query = "select * from product_cat";
    $execquery = mysqli_query($connection,$query);
    while($rows = mysqli_fetch_array($execquery)){

      $catdata = $rows[1];
    echo "<option>";
    echo "$catdata";
    echo "</option>";
    }
  ?>
   </select>

    <br>
    <input type="text" class="form-control"  placeholder="Product Name" require="" name="npname">
    <br>
    <input type="text" class="form-control"  placeholder="Product Brand" require="" name="brand">
    <br>
    <input type="text" class="form-control"  placeholder="Product Price" require="" name="nprice">
    <br>
    <input type="text" class="form-control"  placeholder="Image Link" require=""  name="nimg">
    <br>
    <input type="file" class="form-control"  placeholder="upload image" require=""  name="pcustomurl">
    <br>
    <input type="text" class="form-control"  placeholder="store one" require=""  name="storeone">
    <br>
    <input type="text" class="form-control"  placeholder="Store Two" require=""  name="storetwo">
    <br>
    <input type="text" class="form-control"  placeholder="Store Three" require=""  name="storethree">
    <br>
    <select class="form-control" name="type">
    <option>New Product</option>
</select>
<br>
    <input type="submit" class="btn btn-primary" value="Add">
  </div>
</form>
<div class="breadcrumb">
    <h2>New Mobile Phones</h2>
</div>

<form action="popular" method="post">

  <div class="form-group">

    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Product Name" require="" name="npname">
    <br>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Product Price" require="" name="nprice">
    <br>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Image Link" require="" name="nimglink">
    <br>
    <input type="file" class="form-control" id="formGroupExampleInput" placeholder="upload image" require="" name="ncustomlink">
    <br>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Store one" require="" name="newstoreone">
    <br>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Store Two" require="" name="newstoretwo">
    <br>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Store Three" require="" name="newstorethree">
    <br>
    <input type="submit" class="btn btn-primary" value="Add">
  </div>
</form>
    </div>
</body>
</html>
