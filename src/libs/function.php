<?php
session_start();
date_default_timezone_set("Asia/Bangkok");

//VERSION
define("VERSION", "0.0.1");

//DATABASE DEVELOPMENT
define("DB_SER", "localhost");
define("DB_NAME", "cs_db57");
define("DB_USR", "root");
define("DB_PWD", "574234059");

//DATABASE HOST
//define("DB_SER", "");
//define("DB_NAME", "");
//define("DB_USR", "");
//define("DB_PWD", "");
function PDOConnector(){
	  try {
	    $conn = new PDO('mysql:host='.DB_SER.';dbname='.DB_NAME.';charset=utf8', DB_USR, DB_PWD);
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	    return $conn;
	  }catch(PDOException $e){ return null;}
}
// Authentication
function Authentication($username,$password){

	  $conn = PDOConnector();
	  $query = $conn->prepare('SELECT * FROM users WHERE user_name = "'.$username.'" AND user_pass = "'.$password.'"');
	  $query ->execute();

	  if($query->rowCount()>0){
		$authen = $query -> fetch(PDO::FETCH_OBJ);

		$_SESSION['AUTHEN']['UID'] = $authen->user_id;
		$_SESSION['AUTHEN']['FNAME'] = $authen->user_fname;
		$_SESSION['AUTHEN']['LNAME'] = $authen->user_lname;
		$_SESSION['AUTHEN']['EMAIL'] = $authen->user_email;
		$_SESSION['AUTHEN']['LEVEL'] = $authen->user_level;
		$_SESSION['AUTHEN']['POSITION'] = $authen->user_position;
		// $_SESSION['AUTHEN']['IMAGE'] = $authen->user_image;
		$_SESSION['AUTHEN']['ADDRESS'] = $authen->user_add;
		$_SESSION['AUTHEN']['TEL'] = $authen->user_tel;

		return true;
		$conn = '';//ปิดฐานข้อมูล
	  }else{ return false; }
}

// CHECK AUTHENTICATION AND AUTHORIZATION
function CheckAuthenticationAndAuthorization(){
	  if(!isset($_SESSION['AUTHEN']['UID'])){
	    header('location: ../../../index.php');
	    die();
	  }
}
 ?>
