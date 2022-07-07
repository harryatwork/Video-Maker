<?php
	// $servername = "localhost";
	// $dbusername = "tharunat_chief";
    // $dbpassword = "Mumbai@3693";
	// $dbname = "tharunat_vid_editor";
	// $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	
	
	// define('HOST','localhost');
	// define('USERNAME', 'tharunat_chief');
	// define('PASSWORD','Mumbai@3693');
	// define('DB','tharunat_vid_editor');

	$servername = "localhost";
	$dbusername = "root";
    $dbpassword = "";
	$dbname = "vid-dev";
	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	
	
	define('HOST','localhost');
	define('USERNAME', 'root');
	define('PASSWORD','');
	define('DB','vid-dev');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	
	$admin = 'vdofymail@gmail.com';

	//vdofymail@gmail.com

	session_start();
    ob_start();
	
?>