<?php
session_start();
if($_SESSION['uname'] == ""){
		echo '<script language="javascript">';
		echo 'alert("You have been signed out.");';
		echo '</script>';
		echo "<script type='text/javascript'> document.location = 'Login.php'; </script>";
}else {
$user = $_SESSION['uname'];
$section = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
	$section = $_POST['id'];?>
<script language="javascript">
 console.log("<?php echo $section; ?>");
 </script> <?php
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "carmedia";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
		
     $DELETE = "DELETE FROM vehicle WHERE user = ?, section = ?";
     $stmt = $conn->prepare($DELETE);
     $stmt->bind_param("ss", $user, $section);
     $stmt->execute();
			if($section == "le"){
				echo '<script language="javascript">';
				//echo 'alert("aa");';
				echo 'document.getElementById("lf").style.display = "none";';
				echo 'document.getElementById("lmk").value = "";';
				echo 'document.getElementById("lmd").value = "";';
				echo 'document.getElementById("lyr").value = "";';
				echo 'document.getElementById("le").style.display = "block";';
				echo '</script>';
			}
	}
}

?>