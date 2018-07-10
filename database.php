<?php
//
//$db_host = 'localhost';
//$db_name = 'quizzer';
//$db_user = 'root';
//$db_pass = '';
//
////create mysqli object
//$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
//
////Error handler
//
//if($mysqli->connect_error){
//    echo 'connection failed'.$mysqli->connect_error;
//}else{
////    echo 'connection successful';
//}
$dsn='mysql:host=localhost;dbname=quizzer';
$user='root';
$pass='';
$options=array(
			PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
	);



try {
	$conn = new PDO($dsn,$user,$pass,$options);

	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


	// echo "You Are Connected Welcome To Database";


} catch (PDOException $e) {
	// echo "failed connection".$e->getmessage() ;
}



?>