<?php
	session_start(); 
	if($_SESSION['uname'] == ""){
		echo '<script language="javascript">';
		echo 'alert("You have been signed out.");';
		echo '</script>';
		echo "<script type='text/javascript'> document.location = 'Login.php'; </script>";
	}
	//$_SESSION['page'] = "Home";
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
<a href="MyGarage.php">My Garage</a>
<!--<a href="MyGarage.html">Groups</a> //nespesiu sito padaryt-->
<a href="Settings.html">Settings(-)</a>
<a href="About.html">About(-)</a>
<a href="sign-out.php" class="aaa" style="color: rgba(255, 0, 0, 1); ">Sign Out</a>
<br>
<br>

</div>
<div class="main-feed">
<div class="feed-post">
<img class="post-img"src="https://m.autoasas.lt/images/files/image/Straipsniai7/71/4.jpg">
<p class="post-description"> MB C43 AMG Coupe </p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="feed-post">
<img class="post-img"src="https://www.part.lt/img/7de14878f7a5c56a8ba4160a7da3ffa9623.jpg">
<p class="post-description"> Slammed AR159ti</p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="feed-post">
<img class="post-img"src="https://i2.wp.com/pfellas.lt/wp-content/uploads/2020/02/eng_pl_SIDE-SKIRTS-DIFFUSERS-ALFA-ROMEO-159-TI-5425_3.jpg?fit=1200%2C799&ssl=1">
<p class="post-description"> Clean one! 159<3</p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="feed-post">
<img class="post-img"src="https://media.fastestlaps.com/mercedes-benz-c-43-amg-coupe-4matic.jpg">
<p class="post-description"> Another little beast</p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="feed-post">
<img class="post-img"src="https://i.ytimg.com/vi/XOjoffMZkpE/maxresdefault.jpg">
<p class="post-description"> What on earth...</p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="feed-post">
<img class="post-img"src="https://i.pinimg.com/originals/d3/df/f9/d3dff9a5bcf08204108548ea6028fa24.jpg">
<p class="post-description"> Marvelous </p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div class="fixed-ads">
<div class="ads-column">
<br>
<br>
<br>
<br>
<br>
<br>
<a href="">
<img class="ad-banner250" alt="Your add here" src="data:image/jpeg;base64,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">
</a>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="">
<img class="ad-banner250" alt="Your add here" src="data:image/jpeg;base64,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">
</a>
</div>
</div>
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