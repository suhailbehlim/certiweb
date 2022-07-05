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
  $sam="INSERT INTO detail(Institute,First_name,Fsign,Ssign,Sdate) VALUES(:Iname,:name,:sign1,:sign2,:sdate)" ;
  $smt=$pdo->prepare($sam);
  $smt->bindparam(':Iname', $_POST['iname']);
  $smt->bindparam(':name', $_POST['fname']);
  $smt->bindparam(':sign1', $_POST['fsign']);
  $smt->bindparam(':sign2', $_POST['ssign']);
  $smt->bindparam(':sdate', $_POST['Date']);
  $smt->execute();
}
catch(PDOException $d){
    die("ERROR: Could not connect1. " . $d->getMessage());
  }

header("location:completion.html")
?>