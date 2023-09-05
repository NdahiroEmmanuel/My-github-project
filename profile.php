

<?php
session_start();
?>

<table style="border: 2px solid green;width: 100%;height: 180px">
<tr><td>
<h3><form method="POST">
<td><input type="text" name="nam" placeholder="Names"required="" value="<?php echo $_SESSION['na'];?>"></td>
<td><input type="text" name="add" placeholder="Address"required="" value="<?php echo $_SESSION['addre'];?>"></td></tr>
<tr><td>

<td><input type="text" name="cit" placeholder="City"required="" value="<?php echo $_SESSION['citi'];?>"></td>
<td><input type="text" name="cou" placeholder="Country"required="" value="<?php echo $_SESSION['countr'];?>"></td></tr>
<tr><td>

<td><input type="number" name="zip" placeholder="Zip-code"required="" value="<?php echo $_SESSION['zip'];?>"></td>
<td><input type="number" name="phn" placeholder="Phone"required="" value="<?php echo $_SESSION['pho'];?>"></td></tr>
<tr><td>

<td><input type="email" name="em" placeholder="Email"required="" value="<?php echo $_SESSION['name'];?>"></td>
<td><input type="password" name="pass" placeholder="Password"required="" value="<?php echo $_SESSION['pass'];?>"></td></tr>
</table>
<center><input type="submit" name="subs" value="edit"style="background-color: black;color: white;border: 1px solid grey;border-radius: 10px;padding: 12px"></td>
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
 $id=$_SESSION['cidss'];
$con=mysqli_connect("localhost","root","","online");
$q=mysqli_query($con,"update customers set names='$a',address='$b',city='$c',country='$d',zip_code='$e',phone='$f',email='$g',password='$h' where cid='$id'");
if($q){
	echo "updated";

}
else
echo "failed";
}
?>