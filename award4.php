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
		<div style="border:5px solid black; text-align:center; height:595px; width:960px; background-image:url('imgweb/award4.jpg'); background-size:cover;">
		<div style="padding:28px 0 0 28px;">
		<h1 style="padding:20px; color:#363636;">*CERTIFICATE OF EXCELLENCE*</h1>
		<p style="padding-top:60px; text-align:center; font-size:15px; color:#363636;">IS HEREBY GRANTED TO</p>
		<h1 style="color:#363636; padding-top:5px; text-align: center;"><?php echo"$fname"; ?></h1>
		<p style="font-size:15px; text-align:center; padding-top:10px; color:#363636;">Given this <?php echo"$date" ?> for his</p>
		<p style="font-size:15px; color:#363636;">Excellence in 10th Grade Algebra.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:170px; font-size:10px; color:#363636;"><hr style="width:150px;"> <?php echo"$sign1"; ?></th>
			<th style="padding-left:250px; font-size:10px; color:#363636;"><hr style="width:150px;"><?php echo"$sign2"; ?></th>
		</table>
		</div>
		</div>
		</div>
	</body>
</html>