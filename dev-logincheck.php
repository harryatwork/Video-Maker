<?php include ('db.php'); 
	//15 2 2015
	session_start();
	$email = $_REQUEST["email"];
	$u_id = $_REQUEST["u_id"];
	$o_id = $_REQUEST["o_id"];


if(!empty($email)) {
    
    $sqluser = "SELECT * FROM users WHERE email = '$email' ";
	$resultuser = $conn->query($sqluser);
	if ($resultuser->num_rows > 0) {   
	while($rowuser = $resultuser->fetch_assoc()) {
		$_SESSION["email"] = $email; 
        $_SESSION["login"]="1";
        header("location:index?redirect=true");
	} } else {
         header("location:sign/dev-sign?alert=error"); 
    }
	
} elseif (!empty($u_id)) {
	
	$sqluser = "SELECT * FROM users WHERE id = '$u_id' ";
	$resultuser = $conn->query($sqluser);
	if ($resultuser->num_rows > 0) {   
	while($rowuser = $resultuser->fetch_assoc()) {
		$u_email = $rowuser["email"];
		$_SESSION["email"] = $u_email; 
        $_SESSION["login"]="1";
        header("location:index?redirect=true");
	} } else {
         header("location:sign/dev-sign?alert=error"); 
    }
	
} elseif (!empty($o_id)) {
	
	$sqlquote = "SELECT * FROM quotes WHERE o_id = '$o_id' ";
	$resultquote = $conn->query($sqlquote);
	if ($resultquote->num_rows > 0) {   
	while($rowquote = $resultquote->fetch_assoc()) {
		$q_u_id = $rowquote["u_id"];
	
		$sqluser = "SELECT * FROM users WHERE id = '$q_u_id' ";
		$resultuser = $conn->query($sqluser);
		if ($resultuser->num_rows > 0) {   
		while($rowuser = $resultuser->fetch_assoc()) {
			$u_email = $rowuser["email"];
			$_SESSION["email"] = $u_email; 
			$_SESSION["login"]="1";
			header("location:index?redirect=true");
		} } else {
			 header("location:sign/dev-sign?alert=error"); 
		}
	
	} } else { 
		header("location:sign/dev-sign?alert=error"); 
	} 
	
} else {
	header("location:sign/dev-sign?alert=error"); 
}

?>






