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
		
     $DELETE = "DELETE FROM vehicle WHERE user = ? AND section = ?";
     $stmt = $conn->prepare($DELETE);
     $stmt->bind_param("ss", $user, $section);
     $stmt->execute();
	 $DELETE = "DELETE FROM car_picture WHERE user = ? AND section = ?";
     $stmt = $conn->prepare($DELETE);
     $stmt->bind_param("ss", $user, $section);
     $stmt->execute();
			if($section == "le"){
				echo '<script language="javascript">';
				echo 'document.getElementById("lf").style.display = "none";';
				/*echo 'document.getElementById("lmk").value = "";';
				echo 'document.getElementById("lmd").value = "";';
				echo 'document.getElementById("lyr").value = "";';*/
				echo 'document.getElementById("le").style.display = "block";';
				echo '</script>';
			}
			if($section == "ce"){
				echo '<script language="javascript">';
				echo 'document.getElementById("cf").style.display = "none";';
				/*echo 'document.getElementById("cmk").value = "";';
				echo 'document.getElementById("cmd").value = "";';
				echo 'document.getElementById("cyr").value = "";';*/
				echo 'document.getElementById("ce").style.display = "block";';
				echo '</script>';
			}
			if($section == "re"){
				echo '<script language="javascript">';
				echo 'document.getElementById("rf").style.display = "none";';
				/*echo 'document.getElementById("rmk").value = "";';
				echo 'document.getElementById("rmd").value = "";';
				echo 'document.getElementById("ryr").value = "";';*/
				echo 'document.getElementById("re").style.display = "block";';
				echo '</script>';
			}
			$stmt->close();
			$conn->close();
	}
}

?>