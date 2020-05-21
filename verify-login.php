<?php
$username = "";
$password = "";
$storedPsw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
}

if (!empty($username) && !empty($password)){
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "carmedia";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
		$SELECT = "SELECT password FROM acc_register WHERE username = ?";
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$stmt->bind_result($storedPsw);
		while ($stmt->fetch()) {
			if (password_verify($password, $storedPsw)) {
				 session_start();
				 $_SESSION['uname'] = $username;
				 echo "<script type='text/javascript'> document.location = 'Home.php'; </script>";
				 $stmt->close();
				 $conn->close();
				 exit();
			}else {
				echo '<script language="javascript">';
				echo 'alert("Invalid password.");';
				echo 'document.getElementById("pswLogin").value = "";';
				echo '</script>';
			}
		}
	}
}
?>
