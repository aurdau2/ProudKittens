<?php
session_start();
if($_SESSION['uname'] == ""){
		echo '<script language="javascript">';
		echo 'alert("You have been signed out.");';
		echo '</script>';
		echo "<script type='text/javascript'> document.location = 'Login.php'; </script>";
}
$user = $_SESSION['uname'];
$make = "";
$model = "";
$year = "";
$id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$make = $_POST['make'];
	$model = $_POST['model'];
	$year = $_POST['year'];
	$id = $_POST['id'];
}


if (!empty($make) && !empty($model) && !empty($year) && !empty($user)){
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "carmedia";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into vehicle (make, model, year, user, section) values(?, ?, ?, ?, ?)";
     $stmt = $conn->prepare($INSERT);
     $stmt->bind_param("ssdss", $make, $model, $year, $user, $id);
     $stmt->execute();
		
		 if ($id == "le"){
			echo '<script language="javascript">';
			echo 'alert("Vehicle added successfully!");';
			echo 'document.getElementById("le").style.display = "none";';
			echo 'document.getElementById("id01").style.display = "none";';
			echo 'document.getElementById("lf").style.display = "block";';
			echo '</script>';
		 }
		 if ($id == "ce"){
			echo '<script language="javascript">';
			echo 'alert("Vehicle added successfully!");';
			echo 'document.getElementById("ce").style.display = "none";';
			echo 'document.getElementById("id01").style.display = "none";';
			echo 'document.getElementById("cf").style.display = "block";';
			echo '</script>';
		 }
		 if ($id == "re"){
			echo '<script language="javascript">';
			echo 'alert("Vehicle added successfully!");';
			echo 'document.getElementById("re").style.display = "none";';
			echo 'document.getElementById("id01").style.display = "none";';
			echo 'document.getElementById("rf").style.display = "block";';
			echo '</script>';
		 }
		 
		 
		 
	 exit();
     $stmt->close();
     $conn->close();
    }
}
?>