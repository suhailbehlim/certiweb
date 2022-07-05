<?php
include "data.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Completion certificate</title>
	</head>
	
	<body>
		<div style="border:5px solid #fc0fc0; border-radius:2px; text-align:center; height:630px; width:980px; background-image:url('imgweb/cmple2.jpg'); background-size:cover;">
		<h1 style="padding-top:20px;"><u style="display: inline-block;
					margin: 0 auto;
					font-family: “Roboto Slab”;
					font-size:30;
					background: linear-gradient(120deg, skyblue 0%, red 25%, skyblue 50%, orange 75% ,skyblue 100%);
					-webkit-background-clip: text;
					-webkit-text-fill-color: transparent;">*CERTIFICATE OF COMPLETION*</u></h1>
		<p style="color:lightgray; padding-top:100px;">This certifies that</p>
		<h1 style="display: inline-block;
					margin: 0 auto;
					font-family: “Roboto Slab”;
					font-size:30;
					background: linear-gradient(120deg, yellow 0%, lightgreen 25%, skyblue 50%, orange 75% ,white 100%);
					-webkit-background-clip: text;
					-webkit-text-fill-color: transparent;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; color:lightgray;">successfully completed the Fallfield Council's Emergency</p>
		<p style="font-size:15px; color:lightgray;">preparedness program.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:230px; font-size:10px; color:lightgray;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:80px;"><img src="https://img.icons8.com/flat_round/64/000000/checkmark.png"></th>
			<th style="padding-left:80px; font-size:10px; color:lightgray;"><hr style="width:150px;"><?php echo "$sign2"; ?></th>
		</table>
		</div>
	</body>
</html>