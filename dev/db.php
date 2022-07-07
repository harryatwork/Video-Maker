<?php session_start();

	// $servername = "localhost";
	// $dbusername = "tharunat_chief";
    // $dbpassword = "Mumbai@3693";
	// $dbname = "tharunat_vid_editor";
	// $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	// $conn->set_charset('utf8mb4');
	
	// define('HOST','localhost');
	// define('USERNAME', 'tharunat_chief');
	// define('PASSWORD','Mumbai@3693');
	// define('DB','tharunat_vid_editor');
	
	// $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	// $con->set_charset('utf8mb4');
	
	// $db = new PDO('mysql:host=localhost;dbname=tharunat_vid_editor','tharunat_chief','Mumbai@3693');


	$servername = "localhost";
	$dbusername = "root";
    $dbpassword = "";
	$dbname = "vid-dev";
	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	$conn->set_charset('utf8mb4');
	
	define('HOST','localhost');
	define('USERNAME', 'root');
	define('PASSWORD','');
	define('DB','vid-dev');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	$con->set_charset('utf8mb4');
	
	$db = new PDO('mysql:host=localhost;dbname=vid-dev','root','');
?>