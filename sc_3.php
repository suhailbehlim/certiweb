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
		<div style="border:1px solid black; height:600px; width:900px; background-image:url('imgweb/sc3.jpg'); background-size:cover;">
		<div>
		<table>
		<thead><th style="padding:80px 0 0 550px; font-size:30px; font-family:sans-serif;">CERTIFICATE</th></thead>
		<tbody><td style="padding-left:550px; font-size:30px;">OF EXCELLENCE</td></tbody>
		</table>
		<p style="padding:5px 0 0 600px; font-size:17px;">This certificate is presented to</p>
		<h1 style="padding-left:570px; font-size:30px;"><?php echo"$fname"; ?><hr></h1>
		<p style="padding-left:450px; font-size:17px;">For demonstrating excellent sportsmanship and outstanding
		<br>accomplishments in the (league name).</p>
		<p style="padding-left:540px; font-size:18px;">Presented on 20th day of january 2019</p>
		<table style="margin:70px;">
			<th style="padding-left:450px; font-size:10px;"><hr style="width:76px;"><?php echo"$sign1"; ?></th>
			<th style="padding-left:100px; font-size:10px;"><hr style="width:76px;"><?php echo"$sign2"; ?></th>
		</table>
		</div>
		</div>
		</div>
	</body>
</html>