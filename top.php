
</div></center>

<title></title>
</head>
<body>
	
		<?php
	$con=mysqli_connect("localhost","root","","online");
	$q=mysqli_query($con,"select*from product  group by prod_id");
	while($f=mysqli_fetch_array($q)){
		?>
		<a href="buy.php" target="fro"><img src="<?php echo $f['prod_item'];?>" width="310"height="250">
		

			</body>


		<?php
			}
			?>