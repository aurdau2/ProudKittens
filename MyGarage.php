<?php
	session_start();
if($_SESSION['uname'] == ""){
		echo '<script language="javascript">';
		echo 'alert("You have been signed out.");';
		echo '</script>';
		echo "<script type='text/javascript'> document.location = 'Login.php'; </script>";
}
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

.name:hover {
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
	background-image: url("https://c1.wallpaperflare.com/preview/870/626/358/parking-deck-parking-car-park-deck.jpg");
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
  background-color: rgba(30, 30, 30, 0.5);
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: rgba(88, 88, 88, 1);
  margin-left: auto;
  margin-right: auto;
  border: 1px solid rgba(0, 0, 0, 0);
  border-radius: 30px;
  width: 500px; /* Could be more or less, depending on screen size */
  padding: 0px 50px;
  padding-bottom: 10px;
  position: relative;
  height: 55%;
}

/* Style the horizontal ruler */
hr {
  border: 1px solid rgba(255, 255, 255, 0.7);
  margin-bottom: 10px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 20px;
  top: 0px;
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

.left {
	//display: none;
	height: 100%;
	width: 300px;
	//border: 2px solid red;
	background-color: rgba(20, 20, 20, 0.4);
	border-radius: 30px;
	position: relative;
	float: left;
	text-align: center;
}

.left:hover {
	height: 100%;
	width: 300px;
	//border: 2px solid red;
	background-color: rgba(255, 255, 255, 0.4);
	border-radius: 30px;
	position: relative;
	float: left;
	cursor: pointer;
}

.leftAdded {
	display: none;
	height: 100%;
	width: 300px;
	//border: 2px solid red;
	background-color: rgba(150, 150, 150, 1);
	//border-radius: 30px;
	position: relative;
	float: left;
}

.right {
	height: 100%;
	width: 300px;
	//border: 2px solid red;
	background-color: rgba(20, 20, 20, 0.4);
	border-radius: 30px;
	position: relative;
	margin-top: -700px;
	float: right;
	text-align: center;
}

.rightAdded {
	display: none;
	height: 100%;
	width: 300px;
	//border: 2px solid red;
	background-color: rgba(150, 150, 150, 1);
	//border-radius: 30px;
	position: relative;
	position: relative;
	margin-top: -700px;
	float: right;
}

.right:hover {
	height: 100%;
	width: 300px;
	//border: 2px solid red;
	background-color: rgba(255, 255, 255, 0.4);
	border-radius: 30px;
	position: relative;
	margin-top: -700px;
	float: right;
	cursor: pointer;
}

.center {
	height: 100%;
	width: 300px;
	//border: 2px solid green;
	background-color: rgba(20, 20, 20, 0.4);
	border-radius: 30px;
	position: relative;
	margin-left: auto;
    margin-right: auto;
	text-align: center;
}

.centerAdded {
	display: none;
	height: 100%;
	width: 300px;
	background-color: rgba(150, 150, 150, 1);
	position: relative;
	margin-left: auto;
    margin-right: auto;
}

.center:hover {
	height: 100%;
	width: 300px;
	//border: 2px solid green;
	background-color: rgba(255, 255, 255, 0.4);
	border-radius: 30px;
	position: relative;
	margin-left: auto;
    margin-right: auto;
	cursor: pointer;
}

.box {
  //background-color: cyan;
  margin-top: 5%;
  margin-left: auto;
  margin-right: auto;
  //border: 1px solid white;
  width: 78%;
  height: 700px;
}

.addImg {
	display: block;
  margin-left: auto;
  margin-right: auto;
	width: 70%;
	height: 200px;
	margin-top: 180px;
}

.addImgCenter {
	display: block;
  margin-left: auto;
  margin-right: auto;
	width: 70%;
	height: 200px;
	padding-top: 180px;
}

input[type=text], input[type=number] {
	  background-color: rgba(0, 0, 0, 0.3);
	  font-size: 16px;
	  color: white;
	  width: 100%;
	  padding: 8px 20px;
	  margin-top: 20px;
	  display: inline-block;
	  border: 1px solid rgba(255, 255, 255, 0);
	  border-radius: 3px;
	  box-sizing: border-box;
}
	
.signupbtn {
	  color: rgba(255, 255, 255, 0.7);
	  width: 200px;
	  padding: 19px 13px;
	  margin: 0px 3px;
	  margin-top: 10px;
	  display: inline-block;
	  border-radius: 3px;
	  box-sizing: border-box;
	  border: 1px solid rgba(0, 0, 0, 0);
	  background-color: rgba(0, 0, 0, 0.3);
	  font-weight: bold;
	  opacity: 0.8;
	  font-size: 90%;
}

.signupbtn:hover {
	  background-color: rgba(255, 255, 255, 0.3);
	  //box-shadow: 0px 0px 19px 7px #6e0d68;
	  cursor: pointer;
	  opacity: 1;
	  color: white;
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

</head>

<body>
<div class="grid-container">
<div class="menu-column">
<a class="name" href="Home.php">/CM</a>
<p style="color: white; opacity: 1; font-family: arial; font-size: 12px; display: block;">
<i class="fa fa-circle-o-notch" aria-hidden="true"></i><?php echo $_SESSION['uname']; ?></p>
<button class="dropdown-btn">Categories<i class="fa fa-caret-down"></i>(-)</button>
  <div class="dropdown-container">
    <a href="#">- Show Off</a>
	<a href="#">- Events</a>
	<a href="#">- Service</a>
    <a href="#">- Mods</a>
    <a href="#">- Gas About</a>
  </div>
  <div id="menuButtons">
<a href="MyGarage.php">My Garage</a>
<a href="Settings.html">Settings(-)</a>
<a href="About.html">About(-)</a>
<a href="sign-out.php" class="aaa" style="color: rgba(255, 0, 0, 1); ">Sign Out</a>
</div>
<br>
<br>
</div>

<div style="border: 30px solid rgba(0, 0, 0, 0);">
</div>

<div class="main-feed">
<div class="box">

<div id="lf" class="leftAdded">
<label style="color: white; margin-top: 100px;" >Make</label>
<input id="lmk" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="">
<label style="color: white;" >Model</label>
<input id="lmd" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="">
<label style="color: white;" >Year</label>
<input id="lyr" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="">
<button id="ldelete"> Delete </button>
</div>

<div id="le" class="left" title="Add a new vehicle"> 
<img class="addImg" src="https://static.thenounproject.com/png/621382-200.png">
<p style="font-family: arial; font-size: 30px; color: rgba(0, 0, 0, 0.9);"><i>"click to add vehicle"</i></p>
</div>

<div id="cf" class="centerAdded">
<label style="color: white; margin-top: 100px;" >Make</label>
<input id="cmk" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="">
<label style="color: white;" >Model</label>
<input id="cmd" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="">
<label style="color: white;" >Year</label>
<input id="cyr" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="">
</div>

<div id="ce" class="center" title="Add a new vehicle">
<img class="addImgCenter" src="https://static.thenounproject.com/png/621382-200.png">
<p style="font-family: arial; font-size: 30px; color: rgba(0, 0, 0, 0.9);"><i>click to add vehicle</i></p>
</div>

<div id="rf" class="rightAdded">
<label style="color: white; margin-top: 100px;" >Make</label>
<input id="rmk" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="">
<label style="color: white;" >Model</label>
<input id="rmd" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="">
<label style="color: white;" >Year</label>
<input id="ryr" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="">
</div>

<div id="re" class="right" title="Add a new vehicle">
<img class="addImg" src="https://static.thenounproject.com/png/621382-200.png">
<p style="font-family: arial; font-size: 30px; color: rgba(0, 0, 0, 0.9);"><i>click to add vehicle</i></p>
</div>

</div>
</div>


</div>
<div id="id01" class="modal" style="font-family: arial;">
  
  <form name="addCarForm" class="modal-content animate"><!--onsubmit="return validateForm();"-->
    <div class="container">
	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      <h1 style="color: rgba(255, 255, 255, 1);">New vehicle</h1>
      <hr>
      <label for="name"><b style="color: rgba(255, 255, 255, 0.7); ">Make </b><b style="color: rgba(255, 0, 0, 0.7);">*</b></label>
      <input id="make" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="" name="make" oninvalid="this.setCustomValidity('Please fill out this field.')"
				onchange="this.setCustomValidity('')" required title="Please fill out this field.">
	  <label for="name"><b style="color: rgba(255, 255, 255, 0.7); ">Model </b><b style="color: rgba(255, 0, 0, 0.7);">*</b></label>
      <input id="model" type="text" style="margin-top: 10px; margin-bottom: 10px;" placeholder="" name="model" oninvalid="this.setCustomValidity('Please fill out this field.')"
				onchange="this.setCustomValidity('')" required title="Please fill out this field.">
				<label for="name"><b style="color: rgba(255, 255, 255, 0.7); ">Year </b><b style="color: rgba(255, 0, 0, 0.7);">*</b></label>
      <input id="year" type="number" min="1900" max="2020" style="margin-top: 10px; margin-bottom: 10px;" placeholder="" name="year" oninvalid="this.setCustomValidity('Model year is invalid. Must be 1900-2020.')"
				onchange="this.setCustomValidity('')" required title="Please fill out this field.">
      
      <p style="color: rgba(255, 255, 255, 0.7);"><b style="color: rgba(255, 0, 0, 0.7);">*</b> - required field.</p>

      <div class="clearfix">
	  <button type="submit" value="Submit" class="signupbtn" id="signbut" > <!--onclick="return validateForm();"-->Add to garage</button>
      </div>
    </div>
  </form>
   <p id="msg"></p>
   
</div>



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
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
</script>
<script>
/*$(document).click(function(event) {
    var field = event.target;
	var fieldID = $(event.target)[0].id;
	var saved;
	if(fieldID == ""){
		var suka = field.parentNode.id;
		if(suka == "le" || suka == "ce" || suka == "re"){
			document.getElementById("id01").style.display = "block";
		}
		//$_SESSION(['']);
	}
	else {
		if (fieldID == "le"){
		//document.getElementById("id01").style.display = "block";
		leftClicked();
		}
		if (fieldID == "ce"){
		document.getElementById("id01").style.display = "block";
		saved += fieldID;
		}
		if (fieldID == "re"){
		document.getElementById("id01").style.display = "block";
		saved += fieldID;
		}
		//if(fieldID == "signbut") return validateForm(saved);
	}
	});*/
document.getElementById("le").addEventListener("click", leftClicked);
document.getElementById("ce").addEventListener("click", centerClicked);
document.getElementById("re").addEventListener("click", rightClicked);
document.getElementById("ldelete").addEventListener("click", leftDelete);

function leftDelete(){
	var id = "le";
	$.ajax({
            type:"POST",
            url:"delete-vehicle.php",
            data: 
            {  
			   'id' :id
            },
            cache:false,
            success: function (html) 
            {
               $('#msg').html(html);
            }
            });
}

function leftClicked(){
	document.getElementById("id01").style.display = "block";
	
	$(document).unbind('click').click(function(event) {
    var field = event.target;
	var fieldID = $(event.target)[0].id;
	if(fieldID == ""){
		var suka = field.parentNode.id;
	}
	else {
		if(fieldID == "signbut") return validateForm("le");
	}
	});
}

function centerClicked(){
	document.getElementById("id01").style.display = "block";
	
	$(document).unbind('click').click(function(event) {
    var field = event.target;
	var fieldID = $(event.target)[0].id;
	if(fieldID == ""){
		var suka = field.parentNode.id;
	}
	else {
		if(fieldID == "signbut") return validateForm("ce");
	}
	});
}

function rightClicked(){
	document.getElementById("id01").style.display = "block";
	
	$(document).unbind('click').click(function(event) {
    var field = event.target;
	var fieldID = $(event.target)[0].id;
	if(fieldID == ""){
		var suka = field.parentNode.id;
	}
	else {
		if(fieldID == "signbut") return validateForm("re");
	}
	});
}

function validateForm(id) {
  var make = document.forms["addCarForm"]["make"].value;
  var model = document.forms["addCarForm"]["model"].value;
  var year = document.forms["addCarForm"]["year"].value;
  if (make == "") {
    alert("Vehicle make must be entered.");
    return false;
  }
  if (model == "") {
    alert("Vehicle model must be entered.");
    return false;
  }
  if (year == "") {
    alert("Vehicle model year must be entered.");
    return false;
  }
  if (year != "" && year < 1900 || year > 2020) {
    alert("Model year is invalid. Must be 1900-2020.");
    return false;
  }
  else
	 return clickButtonInsert(id);
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
</script>
    <script type="text/javascript">
	

	function addWords(id){
		var make = document.getElementById('make').value;
		var model = document.getElementById('model').value;
		var year = document.getElementById('year').value;
		//////
		if(id == "le"){
		document.getElementById('lmk').value = make;
		document.getElementById('lmd').value = model;
		document.getElementById('lyr').value = year;
		}
		if(id == "ce"){
		document.getElementById('cmk').value = make;
		document.getElementById('cmd').value = model;
		document.getElementById('cyr').value = year;
		}
		if(id == "re"){
		document.getElementById('rmk').value = make;
		document.getElementById('rmd').value = model;
		document.getElementById('ryr').value = year;
		}
		//////
		document.getElementById('make').value = "";
		document.getElementById('model').value = "";
		document.getElementById('year').value = "";
	}
    function clickButtonInsert(id){
    var make = document.getElementById('make').value;
    var model = document.getElementById('model').value;
	var year = document.getElementById('year').value;
	
    $.ajax({
            type:"POST",
            url:"insert-vehicle.php",
            data: 
            {  
               'make' :make,
               'model' :model, 
			   'year' :year,
			   'id' :id
            },
            cache:false,
            success: function (html) 
            {
               $('#msg').html(html);
			   addWords(id);
            }
            });
            return false;
     }
    </script>
<router-outlet></router-outlet>
<?php
$user = $_SESSION['uname'];
	
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "carmedia";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connection Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT make, model, year, section FROM vehicle WHERE user = ?";
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $user);
     $stmt->execute();
	 $stmt->bind_result($make, $model, $year, $section);
		while ($stmt->fetch()) {
			if($section == "le"){?>
				<script type="text/javascript" >
				document.getElementById("le").style.display = "none";
				document.getElementById("id01").style.display = "none";
				document.getElementById('lmk').value = "<?php echo $make; ?>";
				document.getElementById('lmd').value = "<?php echo $model; ?>";
				document.getElementById('lyr').value = "<?php echo $year; ?>";
				document.getElementById("lf").style.display = "block";
				</script><?php
			}
			if($section == "ce"){?>
				<script type="text/javascript" >
				document.getElementById("ce").style.display = "none";
				document.getElementById("id01").style.display = "none";
				document.getElementById('cmk').value = "<?php echo $make; ?>";
				document.getElementById('cmd').value = "<?php echo $model; ?>";
				document.getElementById('cyr').value = "<?php echo $year; ?>";
				document.getElementById("cf").style.display = "block";
				</script><?php
			}
			if($section == "re"){?>
				<script type="text/javascript" >
				document.getElementById("re").style.display = "none";
				document.getElementById("id01").style.display = "none";
				document.getElementById('rmk').value = "<?php echo $make; ?>";
				document.getElementById('rmd').value = "<?php echo $model; ?>";
				document.getElementById('ryr').value = "<?php echo $year; ?>";
				document.getElementById("rf").style.display = "block";
				</script><?php
			}
		}
		exit();
     $stmt->close();
     $conn->close();
	}
?>
</body>
</html>