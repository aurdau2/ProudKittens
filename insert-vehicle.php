<?php
session_start();
if($_SESSION['uname'] == ""){
		echo '<script language="javascript">';
		echo 'alert("You have been signed out.");';
		echo '</script>';
		echo "<script type='text/javascript'> document.location = 'Login.php'; </script>";
}

	/*$image_name = $_FILES['photo']['name'];
	$image_tmp = $_FILES['photo']['tmp_name'];
	$image_size = $_FILES['photo']['size'];
	$image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
	$image_path = '../images/'.$image_name;
	$image_db_path = 'images/'.$image_name;*/

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
	//$pic = addslashes(file_get_contents($_FILES['pic']['tmp_name']));
	$filename = $_FILES["pic"]["name"]; 
    $tempname = $_FILES["pic"]["tmp_name"];     
    $folder = "images/".$filename; 
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
		 
	 $INSERT = "INSERT Into car_picture (photo, user, section) values(?, ?, ?)";
     $stmt = $conn->prepare($INSERT);
     $stmt->bind_param("sss", $filename, $user, $id);
     $stmt->execute();
	 if (move_uploaded_file($tempname, $folder))  { 
            
        }else{ 
            
      } 
	  $SELECT = "SELECT photo FROM car_picture WHERE user = ? AND section = ?";
      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("ss", $user, $id);
      $stmt->execute();
	  $stmt->bind_result($storedPhoto);
		while ($stmt->fetch()) {
			if($id == "le"){?>
			<script language="javascript">
			document.getElementById("limg").src = "images/" + "<?php echo $storedPhoto; ?>";
			</script>
			<?php
			}
			if($id == "ce"){?>
			<script language="javascript">
			document.getElementById("cimg").src = "images/" + "<?php echo $storedPhoto; ?>";
			</script>
			<?php
			}
			if($id == "re"){?>
			<script language="javascript">
			document.getElementById("rimg").src = "images/" + "<?php echo $storedPhoto; ?>";
			</script>
			<?php
			}
		}
	 exit();
     $stmt->close();
     $conn->close();
    }
}
?>