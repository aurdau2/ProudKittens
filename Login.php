<?php
error_reporting(0);
  session_start();
  if($_SESSION['uname'] != "")
	  echo "<script type='text/javascript'> document.location = 'Home.php'; </script>";
  /*if(localStorage.username != ""){
	  
	  echo '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>';
      echo '<script type="text/javascript">';
	  echo 'alert("a")';
	  echo 'document.getElementById("usrLogin").value = localStorage.username;';
	  echo 'document.getElementById("rememberMe").checkBoxValidation = "checked";';
	  echo '</script>';
  }*/
  ?>
<html>
<head><title>CarMedia</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .toolbar {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 6%;
      display: flex;
      /*background-color: rgba(0, 0, 0, 0.7);*/
	  /*border-bottom: 2px solid white;*/
	  
    }
	
	.name {
	  color: white;
	  font-size: 60px;
	  font-family: impact;
	  float: left;
	  margin-left: 12px;
	}
	
	.nameFixed {
		position: fixed;
		width: 100%;
		margin-left: 0%;
		
	}

    .content {
	  background-color: rgba(0, 0, 0, 0.9);
      display: flex;
      padding: 20px 40px;
	  padding-bottom: 1%;
      flex-direction: column;
      align-items: center;
	  border-radius: 30px;
	  width: 300px;
	  margin: 150px auto;
    }
	
	::placeholder {
	  color: white;
	  opacity: 0.4;
	}
	
	body {
	  background-image: url("https://png.pngtree.com/thumb_back/fw800/back_our/20190625/ourmid/pngtree-c4d-indoor-garage-display-car-scene-image_258567.jpg");
	  background-size: 100% 100%;
	  background-position: 0% 10%;
	}
	
	.sad {
	  text-align: center;
	  margin-left: 0%;
	  margin-top: 100px;
	  font-style: italic;
	  //background-color: rgba(0, 0, 0, 0.3);
	  padding-top: 2px;
	  padding-bottom: 2px;
	  color: rgba(0, 0, 0, 1);
	  width: 100%;
	}
	
	input[type=text] {
	  background-color: rgba(132, 63, 145, 0.7);
	  font-size: 16px;
	  color: white;
	  width: 100%;
	  padding: 12px 20px;
	  margin-top: 20px;
	  display: inline-block;
	  border: 1px solid rgba(255, 255, 255, 0);
	  border-radius: 6px;
	  box-sizing: border-box;
	}
	
	input[type=password] {
	  background-color: rgba(132, 63, 145, 0.7);
	  font-size: 16px;
	  color: white;
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid rgba(255, 255, 255, 0);
	  border-radius: 6px;
	  box-sizing: border-box;
	}
	
	.loginBtn {
	  color: white;
	  width: 60px;
	  padding: 19px 13px;
	  margin: 28px 100px;
	  margin-bottom: 10px;
	  display: inline-block;
	  border: 1px solid rgba(132, 63, 145, 0);
	  border-radius: 30px;
	  box-sizing: border-box;
	  background-color: rgba(132, 63, 145, 0.7);
	  font-weight: bold;
	  opacity: 0.8;
	  font-size: 90%;
	}
	
	.loginBtn:hover {
	  background-color: rgba(227, 36, 227, 0.5);
	  box-shadow: 0px 0px 19px 7px #6e0d68;
	  cursor: pointer;
	  opacity: 1;
	}
	
	/* Extra styles for the cancel button */
.cancelbtn {
  color: red;
  text-decoration: underline;
  margin-left: 200px;
  cursor: pointer;
}

/* Float cancel and signup buttons and add an equal width */
.signupbtn {
  color: white;
	  width: 200px;
	  padding: 19px 13px;
	  margin: 0px 3px;
	  margin-top: 10px;
	  display: inline-block;
	  border: 1px solid rgba(132, 63, 145, 0);
	  border-radius: 30px;
	  box-sizing: border-box;
	  background-color: rgba(132, 63, 145, 0.7);
	  font-weight: bold;
	  opacity: 0.8;
	  font-size: 90%;
}

.signupbtn:hover {
	  background-color: rgba(227, 36, 227, 0.5);
	  box-shadow: 0px 0px 19px 7px #6e0d68;
	  cursor: pointer;
	  opacity: 1;
	}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0, 0, 30, 0.7);
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #121212;
  background-repeat: no;
  background-size: 100%;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid rgba(0, 0, 0, 0);
  border-radius: 30px;
  width: 500px; /* Could be more or less, depending on screen size */
  padding: 0px 50px;
  padding-bottom: 10px;
}

/* Style the horizontal ruler */
hr {
  border: 1px solid rgba(255, 255, 255, 0.7);
  margin-bottom: 10px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 80px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.hr1 {
	border: 1px solid rgba(255, 255, 255, 0.4);
	margin-bottom: -5px;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

  </style>
  
  
  <body>
  <!-- Toolbar -->
  <div class="toolbar" role="banner"><div class="nameFixed">
      <mat-card-header class="name">
        <mat-card-title style="color: red;">/C</mat-card-title><mat-card-title>ar<mat-card-title style="color: red;">M</mat-card-title><mat-card-title>edia</mat-card-title>
      </mat-card-header></div>
  </div>

  <div class="content" role="main" style="font-family: arial;">
	 <form name="loginform" id="login">
       <mat-card class="loginCard">
        <mat-card-title 
        class="header"
        style="font-size: 40px; color: #fff; font-family: arial; ">Drive-In</mat-card-title>
		
            <p>
              <mat-form-field class="username"> 
                <input type="text" id="usrLogin" class="usrLogin" style="margin-top: 15px;"matInput placeholder="username" name="username"
				oninvalid="this.setCustomValidity('Please fill out this field.')"
				onchange="this.setCustomValidity('')"required title="Please fill out this field.">
              </mat-form-field>
            </p>
  
            <p>
              <mat-form-field class="password">
                <input type="password" id="pswLogin" matInput placeholder="password" name="password"
				oninvalid="this.setCustomValidity('Please fill out this field.')"
				onchange="this.setCustomValidity('')" required title="Please fill out this field.">
              </mat-form-field>
            </p>
			
			<label style="color: rgba(255, 255, 255, 0.7);">
        <input type="checkbox" id="rememberMe" name="remember" style="margin-bottom:0px; color: rgba(255, 255, 255, 0.7);"> Remember username
      </label>
			
            <div class="button">
              <button type="submit" value="submit" id="b" class="loginBtn" onclick="return validateFormLogin();" mat-button>Go!</button>
            </div>
			
			<hr class="hr1">
		<p style="color: rgba(255, 255, 255, 0.7); margin-left: 17px; margin-bottom: -16px;">Don't have an account?
		<a onclick="document.getElementById('id01').style.display='block'"
		style="width:auto; color: red; text-decoration: underline; cursor: pointer;">Sign Up</a></p>
          </mat-card>
        </form>
  </div>

<p class="sad">"Be grateful, for we still have internal combustion cars. In 30 years it will be a rarity..."</p>


<div id="id01" class="modal " style="font-family: arial;">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
  <form name="signupform" class="modal-content animate" onsubmit="return validateForm();">
    <div class="container">
      <h1 style="color: rgba(255, 255, 255, 1);">Sign Up</h1>
      <p style="color: rgba(255, 255, 255, 0.7);">Please fill in this form to create an account.</p>
      <hr>
      <label for="name"><b style="color: rgba(255, 255, 255, 0.7); ">Username </b><b style="color: rgba(255, 0, 0, 0.7);">*</b></label>
      <input id="usr" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="enter your username" name="username" oninvalid="this.setCustomValidity('Please fill out this field.')"
				onchange="this.setCustomValidity('')" required title="Please fill out this field.">

      <label for="psw"><b style="color: rgba(255, 255, 255, 0.7);">Password </b><b style="color: rgba(255, 0, 0, 0.7);">*</b></label>
      <input type="password" id="psw1" style="margin-top: 10px; margin-bottom: 10px;" placeholder="enter password" name="password" oninvalid="this.setCustomValidity('Please fill out this field.')"
				onchange="this.setCustomValidity('');" oninput="document.getElementById('psw2').pattern = this.value.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, '\\$&')" required title="Please fill out this field.">

      <label for="psw-repeat"><b style="color: rgba(255, 255, 255, 0.7);">Repeat Password </b><b style="color: rgba(255, 0, 0, 0.7);">*</b></label>
      <input type="password" id="psw2" style="margin-top: 10px; margin-bottom: 0px;" placeholder="repeat password" name="psw-repeat" oninvalid="this.setCustomValidity('Passwords must match!')"
				onchange="this.setCustomValidity('');" pattern="" required title="Fields must match.">
      <p style="color: rgba(255, 255, 255, 0.7);"><b style="color: rgba(255, 0, 0, 0.7);">*</b> - required field.</p>
      <p style="color: rgba(255, 255, 255, 0.7);">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a> policy.</p>

      <div class="clearfix">
	  <button type="submit" value="Submit" class="signupbtn" id="signbut" onclick="return validateForm();">Sign Up</button>
      <a onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</a
      </div>
	  
    </div>
	
  </form>
   <p id="msg"></p>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
</script>
  <script>
function validateForm() {
	
  var usr = document.forms["signupform"]["username"].value;
  var psw = document.forms["signupform"]["password"].value;
  var pswRep = document.forms["signupform"]["psw-repeat"].value;
  if (usr == "") {
    alert("Username must be entered.");
    return false;
  }
  if (psw == "") {
    alert("Password must be entered.");
    return false;
  }
  if (pswRep == "" || pswRep != psw) {
    alert("Passwords must match.");
    return false;
  }
  else
	 return clickButtonInsert();
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
</script>
    <script type="text/javascript">
    function clickButtonInsert(){
    var usrname=document.getElementById('usr').value;
    var passw=document.getElementById('psw1').value;
    $.ajax({
            type:"POST",
            url:"insert-on-register.php",
            data: 
            {  
               'username' :usrname,
               'password' :passw
            },
            cache:false,
            success: function (html) 
            {
               $('#msg').html(html);
            }
            });
            return false;
     }
    </script>
	<script>
function validateFormLogin() {
  var usr = document.forms["loginform"]["username"].value;
  var psw = document.forms["loginform"]["password"].value;
  if (usr == "") {
    alert("Username must be entered.");
    return false;
  }
  if (psw == "") {
    alert("Password must be entered.");
    return false;
  }
  else
	 return clickButtonVerify();
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
</script>
    <script type="text/javascript">
	
	if(localStorage.username != ""){
	  document.getElementById("usrLogin").value = localStorage.username;
	  document.getElementById("rememberMe").checked = "checked";
	}
	else {
		document.getElementById("usrLogin").value = "";
		document.getElementById("rememberMe").checked = "";
	}
  
    function clickButtonVerify(){
		if ($('#rememberMe').is(':checked')) {
            localStorage.username = $('#usrLogin').val();
            localStorage.checkBoxValidation = $('#rememberMe').val();
			console.log(localStorage.username);
        } else {
            localStorage.username = '';
            localStorage.checkBoxValidation = '';
        }
	
		
    var usrname=document.getElementById('usrLogin').value;
    var passw=document.getElementById('pswLogin').value;
	
    $.ajax({
            type:"POST",
            url:"verify-login.php",
            data: 
            {  
               'username' :usrname,
               'password' :passw
            },
            cache:false,
            success: function (html) 
            {
               $('#msg').html(html);
            }
            });
            return false;
     }
    </script>
  
   
  </body>
  <router-outlet></router-outlet>
 </html>