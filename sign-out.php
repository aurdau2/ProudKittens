<?php
session_start();
unset($_SESSION['uname']);
session_destroy();
echo "<script type='text/javascript'> document.location = 'Login.php'; </script>";
/*if(localStorage.username != ""){
	  echo '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>';
      echo '<script type="text/javascript">';
	  echo 'document.getElementById("usrLogin").value = localStorage.username;';
	  echo 'document.getElementById("rememberMe").checkBoxValidation = "checked";';
	  echo '</script>';
}*/
?>