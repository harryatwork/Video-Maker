<?php include ('db.php'); 
	//15 2 2015
	$email = $_REQUEST["email"];
	$redirect = $_REQUEST["redirect"];
	$password = md5($_REQUEST["password"]);

    
     $s = "select * from users where email='".$email."' and password = '".$password."'";
    
    $result = mysqli_query($conn,$s);
    
    $count = mysqli_num_rows($result);
    
    if($count>0)
    {
		$_SESSION["email"] = $email; 
		$_SESSION["password"] = $password;
        $_SESSION["login"]="1";
        header("location:dev/index?redirect");
    }
    else
    {
    
    
         
         header("location:sign/index?alert=error"); 
         
     }

?>






