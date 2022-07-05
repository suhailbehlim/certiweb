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
	<div style="border:1px solid black; height:660px; width:950px; text-align:center; background-image:url('imgweb/sc5.jpg'); background-size:cover;">
	<h1 style="padding:70px 0 0 60px; font-size:25px; color:orange;"><I>CERTIFICATE OF ACHIEVEMENT</I></h1>
	<p style="padding:2px 0 0 40px; font-size:25px;">This certifies that</p>
	<h1 style="padding-top:1px; font-size:30px; color:orange; text-align:center;"><I><u><?php echo "$fname"; ?></u></I></h1>
	<p style="padding:2px 0 0 25px; font-size:25px;">for outstanding achievement in this course.</p> 
	<p style="padding:3px 0 0 25px; font-size:25px;">Awarded on <?php echo "$date"; ?>.</p>
	<p style="padding:3px 0 0 25px; font-size:25px;">Your hard work,dedication and achievement will be cherished.</p>
	<table style="margin:50px;">
			<th style="padding-left:220px; font-size:10px;"><hr style="width:76px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:220px; font-size:10px;"><hr style="width:76px;"><?php echo "$sign2"; ?></th>
		</table>
		</div>
		</div>
	</body>
</html>