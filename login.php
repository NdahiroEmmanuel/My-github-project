<body><h1 style="font-size: 40px;color: blue;font-family: ndahiro"><center>
Add new user</h1>
<center>
<form method="POST" style="border:4px dotted red;width: 200px;border-radius: 20px"><h2>
	<center>
		<img src="download.png" style="border-radius: 50%;width: 70px"></center>
<input type="text" name="user" placeholder="Enter username"required=""><br>
<p>
<input type="password" name="pass" placeholder=" Enter password"required=""><br></p>
<a><input type="submit" name="sub" value="create"style="background-color: blue;color: white;border: 1px solid blue;border-radius: 10px;padding: 12px"></a><br></form></h2></form></center><center>
<?php
if(isset($_POST['sub'])){
  $a=$_POST['user'];
  $b=$_POST['pass'];
$con=mysqli_connect("localhost","root","","online");
$q=mysqli_query($con,"insert into users values('','$a','$b')");
if($q){ 
echo "$a account created";
}
 else
echo"failed";
}
?>
</form>
</body>
</html>

<table border="1"style="border-collapse: collapse">
	<tr><th>USER ID</th><TH>USERNAME</TH><TH>PASSWORD</TH><TH>ACTION</TH></tr>
	
		<?php
	$con=mysqli_connect("localhost","root","","online");
	$q=mysqli_query($con,"select*from users");
	while($f=mysqli_fetch_array($q)){
		?>
		<tr>
			<td><?php echo $f['userid'];?></td>
			<td><?php echo $f['username'];?></td>
			<td><?php echo $f['password'];?></td>
			<td><a href="updateuser.php?odss=<?php echo $f['userid'];?>">EDIT</a>
		
<a href="deleteuser.php?od=<?php echo $f['userid'];?>">DELETE</a></td></tr>
			</body>


		<?php
			}
			?>
		</table>