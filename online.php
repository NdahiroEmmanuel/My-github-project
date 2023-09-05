<?php
session_start();
?>

<h1>ONLINE SHOPING SYSTEM<a href="user.php"style="background-color: green;color: white;border: 1px solid green;border-radius: 10px;padding: 12px;margin-left: 80%;padding:20px;text-decoration: none;">Admin</td></a></tr></table></a></form></h2></form></center><center>

<div class="r" style="background-color: green;width: 100%">
	<a href="">Home</a>
	<a href="">Top brand</a>
	<a href="">Contact</a>

</body>
</html>

<style type="text/css">
	
.r a{
color:white;
font-size: 40px;
margin:60px;
text-decoration: none;
}





</style>
</div></center>

<title></title>
</head>
<body>

	<div class="column" style="width: 33.3%">	
<h2 style="color: grey">Existing customers</h2>sign in with the form above<form method="POST" style="border:2px solid green;width: 400px;border-radius: 0px">


<input type="email" name="user" placeholder="Email"required="">
<p>
<input type="password" name="pass" placeholder="Password"required=""></p>
<a><input type="submit" name="sub" value="Sign In"style="background-color: black;color: white;border: 1px solid grey;border-radius: 10px;padding: 12px"></a><br></form></h2></form></center><center>
<?php
if(isset($_POST['sub'])){
  $a=$_POST['user'];
  $b=$_POST['pass'];
$con=mysqli_connect("localhost","root","","online");
$q=mysqli_query($con,"select*from customers where email='$a' and password='$b'");
$f=mysqli_fetch_array($q);
if(is_array($f)){
	$_SESSION['cidss']=$f['cid'];
	$_SESSION['name']=$f['email'];
	$_SESSION['pass']=$f['password'];
	$_SESSION['na']=$f['names'];
	$_SESSION['addre']=$f['address'];
	$_SESSION['citi']=$f['city'];
	$_SESSION['countr']=$f['country'];
	$_SESSION['zip']=$f['zip_code'];
	$_SESSION['pho']=$f['phone'];
	
	if($_SESSION['name']==$a and $_SESSION['pass']==$b){
header("location:home.php");

	}
}

 else{
 	?>
 <h3 style="color:red">
 <?php
echo"incorect email or password";
?><br>
<a href="login.php"> <?php
echo "create new account";

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
		border:1px solid green;
		
	}
	input[placeholder]{
		text-align: c
	}

	.column{
		float: left;
		height: 200px;
	}
		.columns{
		float: left;
		height: 200px;
		background-color: black;
		margin-top: 140px;
		border: 0.2px solid black;
	}
</style></a></h3></center></div></body>
<div class="column" style="width: 66.6%"><h2 style="color: grey">Register New Account</h2><table style="border: 2px solid green;width: 100%;height: 180px">
<tr><td>
<h3><form method="POST">
<td><input type="text" name="nam" placeholder="Names"required=""></td>
<td><input type="text" name="add" placeholder="Address"required=""></td></tr>
<tr><td>

<td><input type="text" name="cit" placeholder="City"required=""></td>
<td><input type="text" name="cou" placeholder="Country"required=""></td></tr>
<tr><td>

<td><input type="number" name="zip" placeholder="Zip-code"required=""></td>
<td><input type="number" name="phn" placeholder="Phone"required=""></td></tr>
<tr><td>

<td><input type="email" name="em" placeholder="Email"required=""></td>
<td><input type="password" name="pass" placeholder="Password"required=""></td></tr>
</table>
<center><input type="submit" name="subs" value="Create new account"style="background-color: black;color: white;border: 1px solid grey;border-radius: 10px;padding: 12px"></td>
</div>
</td>
</tr></td></tr><?php
if(isset($_POST['subs'])){
  $a=$_POST['nam'];
  $b=$_POST['add'];
    $c=$_POST['cit'];
  $d=$_POST['cou'];
    $e=$_POST['zip'];
  $f=$_POST['phn'];
    $g=$_POST['em'];
  $h=$_POST['pass'];
$con=mysqli_connect("localhost","root","","online");
$q=mysqli_query($con,"insert into customers values('','$a','$b','$c','$d','$e','$f','$g','$h')");
if($q){
	echo "creted sucessfull";
}
else
echo "failed";
}
?>
<style type="text/css">
	
input[placeholder]{
		font-size:22px;
	}
a{
	text-decoration: none;
	font-size: 60px;
	color: white;
	float:top;
}
</style><div class="columns" style="width: 50%;background-color: black"><h1 style="color: white">Adress</h1><h4 style="color: white">Rwanda-kigali-nyarugenge<br>At road kk23747-24302<br></h4><h1 style="color: white">&copy 2022 jaxofff</h1>
	</div><div class="columns" style="width: 49.3%;background-color: black"><h1 style="color: white">Contact</h1><h4 style="color: white">phone number:0787549324<br>
		facebook:onlineshop<br>
	instagram:onlishop<br>
twitter:shopon<br>
e-mail:onlineshoping1@gmail.com<br></h4>


<h1 style="color: white">&copy 2022 jaxofff</h1></div>
	<style type="text/css">
		 a{
			font-size: 10px;
		}

	</style>