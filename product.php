<!DOCTYPE html>
<html>
<body>

<form  method="POST" enctype="multipart/form-data">
  product item<input type="file" name="fileToUpload" id="fileToUpload"><br>
  product type<input type="text" name="pt"><br>
  product price<input type="text" name="pr"><br>
  <input type="submit" value="Upload" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
	
	$b=$_POST['pt'];
	$c=$_POST['pr'];
	$files=$_FILES["fileToUpload"]["tmp_name"];
	$path="myfolder/".$_FILES["fileToUpload"]["name"];
	move_uploaded_file($files,$path);
	$con=mysqli_connect("localhost","root","","online");
$q=mysqli_query($con,"insert into product values('','$path','$b','$c')");
if($q){
	echo "inserted";
}
else
echo "failed";
}



?>

<table border="1"style="border-collapse: collapse;">
	<tr><th>PRODUCTID</th><TH>PRODUCT ITEM</TH><TH>PRODUCT TYPE</TH><TH>PRICE</TH><TH>ACTIONS</TH></tr>
	
		<?php
	$con=mysqli_connect("localhost","root","","online");
	$q=mysqli_query($con,"select*from PRODUCT");
	while($f=mysqli_fetch_array($q)){
		?>
		<tr>
			<td><?php echo $f['prod_id'];?></td>
			<td><img src="<?php echo $f['prod_item'];?>" width="400" height="200"></td>
			<td><?php echo $f['pro_type'];?></td>
			<td><?php echo $f['pro_price'];?></td>
		<td>
<a href="deleteproduct.php?oda=<?php echo $f['prod_id'];?>">DELETE</a></td></tr>
			</body>


		<?php
			}
			?>
		</table>