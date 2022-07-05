<?php
//connection to data base
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

   //insertion of  user detail to data base

   try{
	$sam="INSERT INTO user(Username, Email ,passward) VALUES(:Name,:Email,:Password)" ;
	$smt=$pdo->prepare($sam);
	$smt->bindparam(':Name', $_POST['name']);
	$smt->bindparam(':Email', $_POST['email']);
	$smt->bindparam(':Password', $_POST['pass1']);
	$smt->execute();
	
}
catch(PDOException $d){
		die("ERROR: Could not connect1. " . $d->getMessage());
	}
	unset($pdo);
	
header("Location: certificate.html")


?>