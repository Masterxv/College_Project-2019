<?php
	include('../includes/db.php');

	$queryone ="delete from product_new";
	$querytwo  ="delete from product_specs";
	$querythree  ="delete from product_stores";
	$queryfour  ="delete from product_rating";

	$one = mysqli_query($connection, $queryone);
	$two = mysqli_query($connection, $queryone);
	$three = mysqli_query($connection, $queryone);
	$four = mysqli_query($connection, $queryone);


	if($one && $two && $three && $four){

		echo "Data Deleted";

	}

?>