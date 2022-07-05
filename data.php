<?php
define('DB_SERVER', 'localhost');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_NAME', 'MEMO');


		try{
			$pdo= new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME,DB_USERNAME, DB_PASSWORD);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $j){
		die("ERROR: Could not connect0. " . $j->getMessage());}
		try{
		$sql="SELECT * FROM detail ";
		$shu=$pdo->query($sql);
		if($shu->rowCount()>0)
		{
			
		while ($row= $shu->fetch()) {
			 	
			 	$iname=$row['Institute'];
			 	$fname=$row['First_name'];
			 	$sign1=$row['Fsign'];
			 	$sign2=$row['Ssign'];
			 	$date=$row['Sdate'];
			 	
			 }	
			  
		}
		 
	}
	catch(PDOException $j){
		die("ERROR: Could not connect0. " . $j->getMessage());}
unset($pdo);
?>
