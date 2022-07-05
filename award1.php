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
		<div style="border:5px solid #e7c27d; height:600px; width:900px; background-color:#363636;">
		<table>
		<tr>
		<th style="padding:10px 0 0 10px;"><img src="https://img.icons8.com/plasticine/100/000000/medal.png" width="100" height="100"></th>
		<th style="font-size:30px; padding-left:200px; color:#fff;">CERTIFICATE OF<br>MEMBERSHIP</th>
		</tr>
		<tr><td></td>
		<td></td></tr>
		</table>
		<div style="padding:20px 0 0 130px;">
		<div style="border-top:5px solid #e7c27d; border-left:5px solid #e7c27d; height:456px; width:766px; background-color:#1c2951;">
		<P style="padding-top:60px; text-align:center; color:#e7c27d;">This certifies that</P>
		<h1 style="padding-top:5px; color:#fff; text-align: center;"><?php echo"$fname" ?></h1>
		<P style="text-align:center; color:#e7c27d;">is an official member of</P>
		<P style="text-align:center; color:#e7c27d;"><?php echo"$iname" ?> starting in</P>
		<P style="text-align:center; color:#e7c27d;"><?php echo"$date" ?></P>
		<table style="margin-top:100px;">
			<th style="padding-left:200px; font-size:7px; color:#e7c27d;"><hr style="width:76px;"><?php echo"$sign1" ?></th>
			<th style="padding-left:200px; font-size:7px; color:#e7c27d;"><hr style="width:76px;"><?php echo"$sign2" ?></th>
		</table>
		
		
		</div>
		</div>
		</div>
		</div>
	</body>
</html>