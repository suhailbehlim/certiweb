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
		<div style="border:5px solid maroon; text-align:center; height:595px; width:960px; background-image:url('imgweb/award5.jpg'); background-size:cover;">
		<div style="padding-top:28px">
		<div style="border:5px solid maroon; height:530px; width:955px; background-color:black;">
		<div style="padding:40px 0 0 40px;">
		<div style="border:5px dashed #fff; height:440px; width:860px; text-align:center;">
		<h1 style="padding:20px; color:maroon;">EMPLOYEE OF THE YEAR</h1>
		<p style="padding-top:30px; font-size:15px; color:white;">Hisburgh Corp. Award</p>
		<h1 style="color:maroon; padding-top:10px;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; padding-top:10px; color:white;">for his consistently outstanding</p>
		<p style="font-size:15px; color:white;">and work ethic.</p>
		<table style="margin-top:70px;">
			<th style="padding-left:150px; font-size:10px; color:maroon;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:250px; font-size:10px; color:maroon;"><hr style="width:150px;"><?php echo "$sign2"; ?></th>
		</table>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
	</body>
</html>