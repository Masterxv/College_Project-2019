<?php include('../includes/db.php'); ?>  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="type/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>All Product</title>
    <script>
                    var timer = null;
                    function auto_reload()
                    {
                        window.location = 'fetch.php';
                    }
    </script>
</head>
<body onload="timer = setTimeout('auto_reload()',10000);">
<div class="container">
        <h2>All the Product here </h2>
    <table class="table">
    <thead class="thead-dark">  
    <tr class="bg-primary">
    <th>Product_id</th>
    <th>Product_name</th>
    <th>Product_price</th>
    <th>Product_type</th>
    <th>Delete</th>
    </tr>

    <?php 
    $query = "select * from primary_product";
    
    $exequery = mysqli_query($connection, $query);
    
    while($row = mysqli_fetch_array($exequery)){

        echo "<tr>";
        echo "<td>";
        echo($row[0]);
        echo "</td>";
       
        echo "<td>";
        echo($row[1]);
        echo "</td>";
        

        echo "<td>";
        echo($row[2]);
        echo "</td>";
       
        echo "<td>";
        echo($row[3]);
        echo "</td>";

        echo "<td>";
        echo " <a href='delete_product.php?id=$row[0]'>delete</a>";
        echo "</td>";
        echo "</tr>";
    }

    ?>

    <    <tr class="bg-primary">>
        <th>Cat id</th>
        <th>Cat Name</th>
        <th>Delete</th>
</tr>    
        
        

    <?php 


        $secondquery = "select * from product_cat";
        $secondexcquery = mysqli_query($connection,$secondquery);


        while($row2 = mysqli_fetch_array($secondexcquery)){

           
           
    
           
            echo "<tr>";
            echo "<td>";
            echo($row2[0]);
            echo "</td>";

            echo "<td>";
            echo($row2[1]);
            echo "</td>";




            echo "<td>";
            echo " <a href='delete_cat.php?id=$row2[0]'>delete</a> ";
            echo "</td>";
            echo "</tr>";
            
        }
    
    ?>


      </tbody>
</table>
</div>    
</body>
</html>