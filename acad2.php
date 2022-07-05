<?php
include "data.php";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Academic certificate</title>
	</head>
	
	<body>
		<div style="border:5px solid #fc6600; border-radius:5px; height:595px; width:960px; background-color:gray;">
		<div style="padding:50px 0 0 50px;">
		<div style="border:5px solid #fc6600; border-radius:50%; height:480px; width:850px; background-color:#fc6600;">
		<div style="padding:25px 0 0 25px;">
		<div style="border:5px solid #fc6600; border-radius:5px; height:420px; width:780px; background-color:gray;">
		<h1 style="padding:20px 0 0 150px; color:orange;">ACADEMIC EXCELLENCE AWARD</h1>
		<p style="color:#fff; padding:50px 0 0 310px;;">THIS IS AWARDED TO</p>
		<h1 style="padding:10px; color:orange; text-align: center;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; padding-left:180px; color:#fff;">for her outstanding scholastic performance for the school year.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:190px; font-size:10px; color:orange;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:60px; font-size:10px; color:orange;"><hr style="width:150px;"> <?php echo "$sign2"; ?></th>
		</table>
		</div>
		<div>
		</div>
		</div>
		</div>
	</body>
</html>