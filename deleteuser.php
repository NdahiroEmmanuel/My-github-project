<?php
$id=$_GET['od'];
	$con=mysqli_connect("localhost","root","","online");
	$q=mysqli_query($con,"delete from users where userid='$id'");
	if($q){
		header("location:login.php");
	}
	else
		echo "failed";
	?>
