<?php
session_start();
//$_SESSION["loggedin"] == false;
if(!(isset($_SESSION["logged"]) && $_SESSION["logged"] === true)){
	header("location: loginregister.html");
    exit;
	
    //$_SESSION["user"] = $_SESSION['username'];
	//$_SESSION["loggedin"]=$_SESSION["logged"];
}
?>



<!DOCTYPE HTML>
<HTML>
<link rel = "stylesheet" type = "text/css" href = "style.css" />

<head>
<title>Titan Martial Club</title>

<link rel = "icon" href = "logo icon min png.png" type = "image/x-icon"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<div class="top">

<div class="logo">
<a href="index.php"><img src="Images/logo.png" class="logo" width="100px" height="100px"/></a>
</div>

<div class="title">
<h1>TITAN MARTIAL CLUB</h1>
</div>

<div class="links">
<a href="index.php">Home</a>
<a href="about.php">About Us</a>
<a href="services.php">Services</a>
<a href="contacts.php">Contacts</a>

<div class="loginsignup">



  <?php 
  if($_SESSION['logged']===true)
    { 
	
	
	
	//echo ($_SESSION['username']."   ".'<select><option><a href="logout.php"><span>Logout</span></a></option></select>');
	//echo ($_SESSION['username']."   ".'<select><option><a href="edit.html"><span>Logout</span></a></option></select>');
	
	//----------------------------------------------------------------------------------------------------------------------------------
	 /* 
echo '<td>'; 
echo '<select>';

            echo '<option value="<a href="logout.php"><span>Logout</span></a>';
			echo '<option value="<a href="edit.php"><span>Edit Details</span></a>';
            echo '</option>'; 
	
    echo '</select>';
echo '</td>';
*/
	//-----------------------------------------------------------------------------------------------------------------------------------
	
	//***********************************************************************************************************************************
	
	
	/*
	echo '<select>'; 
    echo '<option>';
	echo ($_SESSION['username']);
	echo '</option>';
       echo '<option> <a href="logout.php">Logout</a></option>';
           // echo '<option value="<a href="logout.php">Logout</a></option>';
        //echo '</a>';
		
		echo ' <a href="edit.php">';
            echo '<option value="<a href="edit.php">Edit My Details</a></option>';
        echo '</a>';
 echo '</select>'; 
*/


	//***********************************************************************************************************************************
	
	//sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
	//TO DO
	
	$img = $_SESSION['image'];
	$user= $_SESSION['username'];
    echo ('<img src="data:image/jpeg;base64,'.base64_encode($img).'">');
	echo '
 <select name="forma" onchange="location = this.value;">
 <option value="">';
 echo ($user);
 echo '</option>
 <option value="edit.php">Edit My Details</option>
 <option value="logout.php">Log Out</option>
</select>';



	//sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
	
	//===================================================================================================================================
	//echo ('<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['image']).'">');
	
	//===================================================================================================================================
	
	//echo ($_SESSION['username']."   ".'<a href="logout.php"><span>Logout</span></a>');
	
	//$img = $_SESSION['image'];
	//echo ('<img src="data:image/jpeg;base64,'.base64_encode($img).'">'."   ".'<a href="logout.php"><span>Logout</span></a>');
     
    }
  elseif($_SESSION['logged']===false)
    {
      echo '<a href="loginregister.html"><span>Login/ Sign Up</span></a>';
    }
?>


<!--          <a href="loginregister.html">Login/ Sign Up</a>           -->
</div>


</div>

</div>
</div>

<br><br><br><br><br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Images/img1.jpg" style="width:100%">
  <div class="text">Vast Skill Set</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="Images/img2.jpg" style="width:100%">
  <div class="text">No Limits</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="Images/img3.jpg" style="width:100%">
  <div class="text">Be Water, My Friend!</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>



<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
 
</div>




<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>



</body>


<footer>

<div class="below">

<div class="history">
<h3>History</h3>
<p>Titan Martial Club was formed in early 2020 by the Founders Andrew Konde and Lescer Kanjele, with the aim of Mixed Martial Arts Training for overall body fitness, self- defense, and Martial Arts Demonstrations. </p>
</div>

<div class="contacts">
<h3>Contacts</h3>
<p>Tel:</p>
<p>+254711190225</p>
<p>+254746921790</p>
<p>Email: titanmartialclub@gmail.com</p>

</div>

<div class="links">
<h3>Social Media</h3>
<a href="https://www.youtube.com/channel/UCA0mzeWRmmV6_BcQucPGC5A" target="_blank">YouTube</a><br><br>
<a href="https://www.instagram.com/titan_martial_club/" target="_blank">Instagram</a><br><br>
<a href="https://www.facebook.com/titanmartialclub" target="_blank">Facebook Page</a><br><br>
<a href="https://www.facebook.com/groups/410427213350712" target="_blank">Facebook Public Group</a><br><br>
</div>

<style>
.below{
background-color: red;
display: flex;
position: relative;
width: 100%;

bottom: 0px;
left: 0px;

}

.below div{
display: inline-block;
text-align: center;
background-color: black;
text-align: left;
color: white;
/*border: 3px solid blue;*/
width: 33.33%;
margin: 0px;
padding: 15px;
}









</style>
</div>

</footer>

</HTML>