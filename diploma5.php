<?php
include "data.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Diploma certificate</title>
	</head>
	
	<body>
		<div style="margin:50px 0 0 250px;">
		<div style="border:5px solid #960019; text-align:center; height:600px; width:900px; background-image:url('imgweb/dpp.jpg'); background-size:cover;">
		<div style="padding:30px 0 0 30px;">
		<div style="border:1px solid #960019; text-align:center; border-radius:10px; width:840px; height:540px; background-color:#960019;">
		<h1 style="padding-top:20px; color:white; font-size:20px;">CERTIFICATE  OF  COMPLETION</h1>
		<p style="padding-top:100px; color:#bdb7ab;">This diploma is given to</p>
		<h1 style="color:#e7c27d;"><?php echo"$fname" ?><hr style="width:300px;"></h1>
		<p style="color:#bdb7ab;">for completing the required course of study at</p>
		<p style="color:#bdb7ab;"><?php echo"$iname" ?>.</p>
		<table style="margin-top:30px;">
			<th style="padding-left:200px; font-size:7px;"><hr style="width:76px;"><?php echo"$sign1" ?></th>
			<th style="padding-left:70px; font-size:7px;"><img src="https://img.icons8.com/officel/80/000000/certificate.png" width="70" height="70"></th>
			<th style="padding-left:70px; font-size:7px;"><hr style="width:76px;"><?php echo"$sign2" ?></th>
		</table>
		</div>
		</div>
		</div>
		</div>
	</body>
</html>