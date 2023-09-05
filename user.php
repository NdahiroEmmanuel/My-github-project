
<?php
session_start();
?>
<title></title>
</head>n
<body><h1 style="font-size: 40px;color: blue;font-family: ndahiro"><center>
online shoping</h1>
<center>
<form method="POST" style="border:4px dotted blue;width: 200px;border-radius: 20px"><h2>
	
<input type="text" name="user" placeholder="Enter username"required="">
<p>
<input type="password" name="pass" placeholder=" Enter password"required=""></p>
<a><input type="submit" name="sub" value="Login"style="background-color: blue;color: white;border: 1px solid blue;border-radius: 10px;padding: 12px"></a><br></form></h2></form></center><center>
<?php
if(isset($_POST['sub'])){
  $a=$_POST['user'];
  $b=$_POST['pass'];
$con=mysqli_connect("localhost","root","","online");
$q=mysqli_query($con,"select*from users where username='$a' and password='$b'");
$f=mysqli_fetch_array($q);
if(is_array($f)){
	$_session['name']=$f['username'];
	$_session['pass']=$f['password'];
	if($_session['name']==$a and $_session['pass']==$b){
header("location:ADMIN.php");

	}
}

 else{
 	?>
 <h3 style="color:red">
 <?php
echo"incorect username or password";


}
}
?>
</form>
</body>
</html>
<style type="text/css">
	h3{

	}
	input{
		margin: 7px;
		border:3px dotted blue;
		border-radius: 20px;
	}
	input[placeholder]{
		text-align: c
	}
</style>