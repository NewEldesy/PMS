<?php 
//$host = "localhost";
$host = "mysql-javacrud.alwaysdata.net";
$user = "javacrud";
$password = "Javacrud.mysql";
$db = "javacrud_pms";
//$db = "pms_db";
try {

  $con = new PDO("mysql:dbname=$db;port=3306;host=$host", 
  	$user, $password);
  // set the PDO error mode to exception
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: ".
   $e->getMessage();
  echo $e->getTraceAsString();
  exit;
}

session_start();

//24 minutes default idle time
// if(isset($_SESSION['ABC'])) {
// 	unset($_SESSION['ABC']);
// }

?>
