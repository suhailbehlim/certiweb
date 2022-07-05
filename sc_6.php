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
		<div style="border:1px solid black; height:630px; width:920px; text-align:center; background-image:url('imgweb/sc6.jpg'); background-size:cover;">
		<table>
		<thead><th style="padding:120px 0 0 320px; font-size:35px; font-family:sans-serif;">CERTIFICATE</th></thead>
		<tbody><td style="padding-left:320px; font-size:34px;">of  PARTICIPATION</td></tbody>
		</table>
		<p style="padding:30px; font-size:15px;">Is hereby presented to</p>
		<h1 style="font-size:28px; color:red;"><?php echo "$fname"; ?></h1>
		<p style="padding-left:20px; font-size:15px;">For successfully participating in the National Netball Tournament held in
		<br>India.</p>
		<table style="margin:100px 0 0 130px;">
			<th style="padding-left:80px; font-size:10px;"><hr style="width:76px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:320px; font-size:10px;"><hr style="width:76px;"><?php echo "$sign2"; ?></th>
		</table>
		</div>
		</div>
	</body>
</html1