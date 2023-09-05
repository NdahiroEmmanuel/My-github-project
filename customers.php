
<table border="1"style="border-collapse: collapse;">
	
<tr><th>CID</th><TH>NAMES</TH><TH>CITY</TH><TH>COUNTRY</TH><TH>ADDRESS</TH><TH>ZIP_CODE</TH><TH>EMAIL</TH><TH>PASSWORD</TH><TH>ACTION</TH></tr>
	
		<?php
	$con=mysqli_connect("localhost","root","","online");
	$q=mysqli_query($con,"select*from CUSTOMERS");
	while($f=mysqli_fetch_array($q)){
		?>
		<tr>
			<td><?php echo $f['cid'];?></td>
			<td><?php echo $f['names'];?></td>
			<td><?php echo $f['city'];?></td>
			<td><?php echo $f['country'];?></td>
			<td><?php echo $f['address'];?></td>
			<td><?php echo $f['zip_code'];?></td>
			<td><?php echo $f['email'];?></td>
			<td><?php echo $f['password'];?></td>
<td>		
<a href="deletecustomer.php?ods=<?php echo $f['cid'];?>">DELETE</a></td></tr>
			</body>
<?php
			}
			?>
		</table>
