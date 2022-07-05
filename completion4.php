<?php
include "data.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Completion certificate</title>
	</head>
	
	<body>
		<div style="border:10px solid black; text-align:center; border-radius:5px; height:600px; width:920px; background-color:skyblue;">
		<div style="padding-left:40px;">
		<div style="border:5px solid black; border-radius:60px; height:590px; width:831px; background-color:black;">
		<h1 style="padding-top:40px; color:skyblue;"><u>Completion Certificate</u></h1>
		<p style="color:pink; padding-top:100px;">This is certify that</p>
		<h1 style="padding-top:5px; color:skyblue;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; color:pink;">successfully completed the programming language course</p>
		<p style="font-size:15px; color:pink;">for beginner from scratch online course.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:140px; font-size:10px; color:skyblue;"><hr style="width:150px;">p<?php echo "$sign1"; ?></th>
			<th style="padding-left:90px;"><img src="https://img.icons8.com/cotton/64/000000/completed-task.png"></th>
			<th style="padding-left:90px; font-size:10px; color:skyblue;"><hr style="width:150px;"><?php echo "$sign2"; ?></th>
		</table>
		</div>
	</body>
</html>