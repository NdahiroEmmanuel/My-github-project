<?php
$id=$_GET['ods'];
	$con=mysqli_connect("localhost","root","","online");
	$q=mysqli_query($con,"delete from customers where cid='$id'");
	if($q){
		header("location:customers.php");
	}
	else
		echo "failed";
	?>
