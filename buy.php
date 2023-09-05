<table border="1"style="border-collapse: collapse;">
	<tr><TH>PRODUCT ITEM</TH><TH>PRICE</TH><TH>ACTIONS</TH></tr>
	
		<?php
	$con=mysqli_connect("localhost","root","","online");
	$q=mysqli_query($con,"select*from PRODUCT");
	while($f=mysqli_fetch_array($q)){
		?>
		<tr>
			
			<td><img src="<?php echo $f['prod_item'];?>" width="400" height="200"></td>
			<td><?php echo $f['pro_price'];?></td>
			<td>
		
<a href="DELETEeuser.php?od=<?php echo $F['userid'];?>">buy</a></td></tr>
			</body>


		<?php
			}
			?>
		</table>