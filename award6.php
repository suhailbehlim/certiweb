<?php
include "data.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Award certificate</title>
	</head>
	
	<body>
		<div style="margin:50px 0 0 250px;">
		<div style="border:5px solid yellow; text-align:center; height:595px; width:960px; background-image:url('imgweb/award6.jpg'); background-size:cover;">
		<div style="padding:28px 0 0 28px;">
		<div style="text-align:center;">
		<img src="https://img.icons8.com/bubbles/100/000000/camera.png" width="80" height="80">
		</div>
		<h1 style="text-align:center; color:yellow;">BEST PHOTOGRAPH AWARD</h1>
		<p style="padding-top:50px; text-align:center; font-size:15px; color:skyblue;">This prize is awarded to</p>
		<h1 style="color:yellow; padding-top:8px; text-align:center;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; padding-top:7px; text-align:center; color:skyblue;">for winning 1st place in Click Photo</p>
		<p style="font-size:15px; color:skyblue; text-align:center;">Contest held <?php echo "$date"; ?>.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:250px; font-size:10px; color:yellow;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:250px; font-size:10px; color:yellow;"><hr style="width:150px;"><?php echo "$sign2"; ?></th>
		</table>
		</div>
		</div>
		</div>
	</body>
</html>