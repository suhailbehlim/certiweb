<?php
include"data.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>B'day certificate</title>
	</head>
	
	<body>
		<div style="border:5px solid gray; border-radius:5px; height:595px; width:960px; background-image:url('imgweb/birth2.jpg'); background-size:cover;">
		<div style="padding:30px 0 0 70px;">
		<div style="background:rgba(0,0,0,.5); border-radius:20px;  width:830px; height:500px;">
		<h1 style="padding:20px 0 0 250px; color:#29ab87;"><u>HAPPY BIRTHDAY</u></h1>
		<h1 style="color:lightgray; padding:50px 0 0 240px;;">B'day Boy <?php echo "$fname"; ?></h1>
		<p style="font-size:15px; padding-left:180px; color:skyblue;">is now of legal age and can finally buy his own beer. Cheers, buddy!</p>
		<table style="margin-top:100px;">
			<th style="padding-left:190px; font-size:10px; color:#29ab87;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:60px; font-size:10px; color:#29ab87;"><hr style="width:150px;"> <?php echo "$sign2"; ?></th>
		</table>
		</div>
		<div>
		</div>
	</body>
</html>