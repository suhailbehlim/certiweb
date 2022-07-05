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
		<div style="border:3px solid black; text-align:center; height:595px; width:895px; background-color:#363636;">
		<div style="padding:28px 0 0 28px;">
		<div style="border:2px solid black; text-align:center; height:535px; width:835px; background-image:url('imgweb/award3.jpg'); background-size:cover;">
		<h1 style="padding:20px; color:maroon;">-*- CERTIFICATE OF RECOGINATION -*-</h1>
		<p style="padding-top:50px; font-size:15px;">This certificate goes to</p>
		<h1 style="color:maroon;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px;">for exceeding expectations by presenting</p>
		<p style="font-size:15px;">outstanding work at our Seminar in <?php echo "$iname"; ?> </p>
		<table style="margin-top:80px;">
			<th style="padding-left:130px; font-size:10px; color:maroon;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:250px; font-size:10px; color:maroon;"><hr style="width:150px;"> <?php echo "$sign2"; ?></th>
		</table>
		</div>
		</div>
		</div>
		</div>
	</body>
</html>