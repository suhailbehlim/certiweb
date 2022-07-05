<?php
include "data.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Diploma certificate</title>
	</head>
	
	<body>
		<div style="border:5px solid #e3b778; text-align:center; height:600px; width:900px; background-image:url('imgweb/dp4.jpg'); background-size:cover;">
		<div style="padding:30px 0 0 30px;">
		<div style="border:1px solid #fff; text-align:center; border-radius:10px; width:840px; height:540px; background-color:whitesmoke;">
		<h1 style="padding-top:10px; color:#c21807; font-size:20px;"><?php echo"$iname"?></h1>
		<h1 style="color:#6f2dab; font-size:20px;">*******************************************************************</h1>
		<p style="padding-top:40px; color:#613613;">Winslough High awards</p>
		<h1 style="color:#c21807;"><?php echo"$fname"?><hr style="width:300px;"></h1>
		<p style="padding-top:5px; color:#613613">for completing the required course of study for high school graduation.</p>
		<p style="color:#613613">of Science in Business course.</p>
		<table style="margin-top:80px;">
			<th style="padding-left:200px; font-size:7px;"><hr style="width:76px;"><?php echo"$sign1"?></th>
			<th style="padding-left:70px; font-size:7px;"><img src="https://img.icons8.com/officel/80/000000/certificate.png" width="70" height="70"></th>
			<th style="padding-left:70px; font-size:7px;"><hr style="width:76px;"><?php echo"$sign2"?></th>
		</table>
		</div>
		</div>
		</div>
	</body>
</html>