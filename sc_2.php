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
		<div style="border:1px solid black; height:600px; width:900px; border-radius:2px;  background-image:url('imgweb/sc2.jpg'); background-size:cover;">
		<div style="padding:20px">
		<div style="border:1px solid #fff; text-align:center; border-radius:10px; width:850px; height:550px; background-image:url('sc22.jpg'); background-size:cover;"><br>
		<img src="sc222.jpg" height="80" width="80"><br>
		<p style="color:#008ecc; font-size:40px;">*MOST VALUABLE PLAYER*</p>
		<p style="color:#598baf; font-size:15px;">THIS AWARD IS PROUDLY PRESENTED TO</p>
		<p style="color:#598baf; font-size:26px;"><?php echo"$fname" ?></p>
		<p style="color:#598baf; font-size:15px;">FOR THE REMARKABLE PARTICIPATION IN <?php echo"$iname" ?> ANNUAL SPORTS FEST</p>
		<P style="color:#598baf; font-size:15px;">FOR THE (game name).HELD ON (11th of january) AT (ground name)</P>
		<P style="color:#598baf; font-size:15px;">AWARDED THIS <?php echo"$Sdate" ?>.</p>
		<table style="margin:40px 0px 0px 40px;">
		<th style="color:gray; font-size:10px; padding-right:470px;"><hr><?php echo"$sign1" ?></th>
		<th style="color:gray; font-size:10px;"><hr><?php echo"$sign2" ?></th>
		</table>
		</div>
		</div>
		</div>
	</body>
</html>