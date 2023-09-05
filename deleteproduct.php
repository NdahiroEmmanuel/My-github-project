<?php
$id=$_GET['oda'];
	$con=mysqli_connect("localhost","root","","online");
	$q=mysqli_query($con,"delete from product where prod_id='$id'");
	if($q){
		header("location:product.php");
	}
	else
		echo "failed";
	?>
