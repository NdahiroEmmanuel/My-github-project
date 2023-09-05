<?php
$o=$_GET['odss'];
	$con=mysqli_connect("localhost","root","","online");
	$q=mysqli_query($con,"select*from users where userid='$o'");
	while($f=mysqli_fetch_array($q)){
		?>

		<form method="POST" style="border:4px dotted blue;width: 200px;border-radius: 20px"><h2>
	
<input type="text" name="user" placeholder="Enter username"required="" value="<?php echo $f['username'];?>">
<p>
<input type="password" name="pass" placeholder=" Enter password"required=""value="<?php echo $f['password'];?>"></p>
<a><input type="submit" name="sub" value="Login"style="background-color: blue;color: white;border: 1px solid blue;border-radius: 10px;padding: 12px"></a><br></form></h2></form></center><center>
	<?php
}
?>
<?php
if(isset($_POST['sub'])){
  $a=$_POST['user'];
  $b=$_POST['pass'];
$con=mysqli_connect("localhost","root","","online");
$q=mysqli_query($con,"update users set username='$a',password='$b' where userid='$o'");
if($q){
	header("location:login.php");

}
else
echo "failed";
}
?>