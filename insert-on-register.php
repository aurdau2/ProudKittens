<?php
$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
}
$hashedPassword = password_hash( $password, PASSWORD_DEFAULT );

if (!empty($username) || !empty($password)){
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "carmedia";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT username From acc_register Where username = ? Limit 1";
     $INSERT = "INSERT Into acc_register (username, password) values(?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ss", $username, $hashedPassword);
      $stmt->execute();
		 echo '<script language="javascript">';
		 echo 'alert("Congratulations! You have registered successfully.")';
		 echo '</script>';
		 echo "<meta http-equiv='refresh' content='0'>";
		exit();
     } else {
		 echo '<script language="javascript">';
		 echo 'alert("This username already exists, please choose a new one.")';
		 echo '</script>';
     }
     $stmt->close();
     $conn->close();
    }
}
  /*if (empty($username)){
 echo '<p style="color: white;">Please enter your new username.</p>';
}
 if (empty($password)){
 echo '<p style="color: white;">Please enter your new password.</p>';
}*/

?>