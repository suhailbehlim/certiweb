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
		<div style="border:2px solid brown; border-radius:2px; height:600px; width:900px; background-image:url('imgweb/sc1.jpg');">
		<div style="border:3px dotted brown; height:594px; width:894px; text-align:center;">
		<div style="border-bottom:3px solid brown;"
		</div>
		<div style="padding-top:50px;">
		<img src="https://img.icons8.com/wired/64/000000/charity.png" height="50px;">
		<h1 style="font-size:25px;">*CERTIFICATE of PARTICIPATON*</h1>
		<p>This certificate is awarded to</p>
		<h1 style="padding-left:20px;"><?php echo"$fname" ?></h1>
		<p>who is participated in <B><?php echo"$pname" ?><B></p>
		
		<th>from</th>
		<th>date</th>
		<th>to</th>
		<th>date.</th>
		
		<h1 style="font-size:13px; padding:40px 0px 0px 450px;"><hr style="width:95px"><?php echo"$sign1" ?></h1>
		</div>
		</div>
	</div>
	</div>
	</Body>
	</body>
</html>