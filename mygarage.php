<?php
	session_start();
	//echo $_SESSION['uname'];
?>
<html>
<head><title>CarMedia</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.menu-column {
	height: 100%;
	background-color: rgba(0, 0, 0, 0.3);
	position: fixed;
	flex: 0 0 150px;
}

.menu-column a:not(.name){
	display: block;
	text-decoration: none;
	font-size: 16px;
	padding: 5px;
	color: rgba(255, 255, 255, 0.6);
	font-family: arial;
}

.dropdown-btn {
	margin-top: 0px;
	display: block;
	text-decoration: none;
	width: 150px;
	text-align: left;
	font-size: 16px;
	padding: 5px;
	cursor: pointer;
	color: rgba(255, 255, 255, 0.6);
	font-family: arial;
	background: none;
	border: none;
	padding-left: 4px;
}

.menu-column a:hover:not(.name), .dropdown-btn:hover{
	background-color: rgba(0, 0, 0, 0.6);
	color: rgba(255, 255, 255, 1);
}

.activen, .name:hover {
	background-color: rgba(255, 0, 0, 0);
	color: white;
}

.main-feed {
	height: 100%;
	flex: 1 0 1200px;
}

.ads-column {
	height: 100%;
	background-color: rgba(0, 0, 0, 0.3);
	flex: 0 0 300px;
	float: right;
}

html, body {
	margin: 0;
	padding: 0;
	background-attachment: fixed;
	background-size: 100% 100%;
	background-image: url("https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-018.jpg");
}

.grid-container {
	display: flex;
}

.name {
	color: rgba(255, 0, 0, 1);
	font-size: 60px;
	font-family: impact;
	text-decoration: none;
	width: 145px;
	display: block;
	padding-left: 5px;
}

.active {
    background-color: rgba(0, 0, 0, 0.6);
    color: white;
}

.dropdown-container {
    display: none;
    background-color: rgba(0, 0, 0, 0.4);
    padding-left: 8px;
	
  }

.fa-caret-down {
    float: center;
    padding-left: 8px;
    padding-right: 3px;
}

.fa-circle-o-notch {
    font-size: 12px;
	padding-right: 8px; 
	padding-left: 5px;
	color: #73ff00;
}

.ad-banner250 {
	height: 250px;
	width: 300px;
	opacity: 1;
}

.fixed-ads {
	position: fixed;
	width: 0%;
	margin-left: 100%;
	background-color: gray;
}

/*@media only screen and (min-width: 1601px) {
	.feed-post {
	width: 57%;
	min-width:800px;
	height: 850px;
	max-height: 850px;
	border: 1px solid white;
	margin-left: 12.4%;
	position: relative;
	background-color: blue;
	}
}

@media only screen and (min-width: 1921px) {
	.feed-post {
	width: 57%;
	min-width:800px;
	height: 850px;
	max-height: 850px;
	border: 1px solid white;
	margin-left: 12.4%;
	position: relative;
	background-color: red;
	}
}*/

.feed-post {
	width: 57%;
	min-width: 800px;
	height: auto;
	max-height: 850px;
	/*border: 1px solid white;*/
	margin-left: 12.4%;
	position: relative;
}

.post-img {
	width: 800px;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}

.post-description {
	margin-top: 0px;
	width: 800px;
	height: 100px;
	margin-left: auto;
	margin-right: auto;
	display: block;
	color: white;
	background-color: rgba(0, 0, 0, 0.5);
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
  background-color: rgba(255, 255, 255, 0.2);
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
  border: 1px solid rgba(255, 255, 255, 0.7)
  margin-bottom: 25px;
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

.myvehicles {
	border: 1px solid white;
	width: 300px;
	background-color: rgba(255, 255, 255, 0.2);
	margin: auto auto;
	height: 200px;
	text-align: center;
	padding: 0px 30px;
}

.lb {
	margin-right: 60px;
	color: white;
}
</style>

</head>

<body>
<div class="grid-container">
<div class="menu-column">
<a class="name" href="Home.php">/CM</a>
<p style="color: white; opacity: 1; font-family: arial; font-size: 12px; display: block;">
<i class="fa fa-circle-o-notch" aria-hidden="true"></i><?php echo $_SESSION['uname']; ?></p>
<button class="dropdown-btn">Categories<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="#">- Show Off</a>
	<a href="#">- Events</a>
	<a href="#">- Service</a>
    <a href="#">- Mods</a>
    <a href="#">- Gas About</a>
  </div>
  <div id="menuButtons";>
<a href="mygarage.php">My Garage</a>
<a href="Settings.html">Settings</a>
<a href="About.html">About</a>
<a href="Login.php" class="aaa" style="color: rgba(255, 0, 0, 1); ">Sign Out</a>
</div>
<br>
<br>
</div>
</div>



 <form name="signupform" class="modal-content">
    <div class="container">
      <h1 style="color: rgba(255, 255, 255, 1);">New vehicle</h1>
      <hr>
      <label for="name"><b style="color: rgba(255, 255, 255, 0.7); ">Make </b><b style="color: rgba(255, 0, 0, 0.7);">*</b></label>
      <input id="usr" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="" name="username" oninvalid="this.setCustomValidity('Please fill out this field.')"
				onchange="this.setCustomValidity('')" required title="Please fill out this field.">
	  <label for="name"><b style="color: rgba(255, 255, 255, 0.7); ">Model </b><b style="color: rgba(255, 0, 0, 0.7);">*</b></label>
      <input id="usr" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="" name="username" oninvalid="this.setCustomValidity('Please fill out this field.')"
				onchange="this.setCustomValidity('')" required title="Please fill out this field.">
				<label for="name"><b style="color: rgba(255, 255, 255, 0.7); ">Year </b><b style="color: rgba(255, 0, 0, 0.7);">*</b></label>
      <input id="usr" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="" name="username" oninvalid="this.setCustomValidity('Please fill out this field.')"
				onchange="this.setCustomValidity('')" required title="Please fill out this field.">
      
      <p style="color: rgba(255, 255, 255, 0.7);"><b style="color: rgba(255, 0, 0, 0.7);">*</b> - required field.</p>

      <div class="clearfix">
	  <button type="submit" value="Submit" class="signupbtn" id="signbut" onclick="return validateForm();">Add to garage</button>
      </div>
    </div>
  </form>

<div class="myvehicles">
	<h1 style="color: rgba(255, 255, 255, 1);">My vehicles</h1>
	<label class="lb">Make </label>
	<label class="lb">Model </label>
	<label class="lb">Year </label>
	<hr>
</div>

<router-outlet></router-outlet>
</body>
</html>

<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

<script>/*
var header = document.getElementById("menuButtons");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }
    this.className += " active";
  });
}*/
</script>