<?php 
	// กำหนดตัวแปรสำหรับเชื่อมฐานข้อมูล
	// localhost
	$host 		= "localhost";
	$username 	= "root";
	$password	= "1234";
	$dbname	= "cleanblog";

	// Hosting
	//$username 	= "geniusshop_db";
	//$password	= "kgjwsBtsS";
	//$dbname	= "geniusshop_db";

	$port		= 3306;
	$dsn 		= "mysql:host=$host;port=$port;dbname=$dbname";

	try{
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
		);
		// คำสั่งเชื่อมต่อฐานข้อมูล
		$dbh = new PDO($dsn,$username,$password,$options);
		//echo "Connect Database Success";
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>