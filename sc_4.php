<?php
include "data.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>sports certificate</title>
	</head>
	
	<body>
		<div style="margin:50px 0 0 250px;">
		<div style="border:1px solid black; height:650px; width:910px; background-image:url('imgweb/sc4.jpg'); background-size:cover;">
		<table>
		<thead><th style="padding:70px 0 0 430px; font-size:30px; font-family:sans-serif; color:red;">CERTIFICATE</th></thead>
		<tbody><td style="padding-left:430px; font-size:24px;">OF ACHIEVEMENT</td></tbody>
		</table>
		<p style="padding:30px 0 0 450px; font-size:15px;">Is hereby presented to</p>
		<h1 style="padding-top:10px; font-size:28px; color:red; text-align:center;"><?php echo "$fname"; ?></h1>
		<p style="padding:5px 0 0 340px; font-size:15px;">in recognition of his outstanding performance and sportsmanship during the</p>
		<p style="padding-left:470px; font-size:15px;">Annual Sports Day</p>
		<p style="padding:20px 0 0 400px; font-size:15px;">Presented on the <?php echo "$date"; ?>.</p>
		<table style="margin:100px 0 0 100px;">
			<th style="padding-left:250px; font-size:10px;"><hr style="width:76px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:220px; font-size:10px;"><hr style="width:76px;"><?php echo "$sign2"; ?></th>
		</table
		</div>
		</div>
	</body>
</html>