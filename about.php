<?php
session_start();
if(!(isset($_SESSION["logged"]) && $_SESSION["logged"] === true)){
	header("location: loginregister.html");
    exit;
}
?>
<!DOCTYPE HTML>
<HTML>
<link rel = "stylesheet" type = "text/css" href = "style.css" />

<head>
<title>About Us</title>

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
     
    }
  elseif($_SESSION['logged']===false)
    {
      echo '<a href="loginregister.html"><span>Login/ Sign Up</span></a>';
    }
?>
</div>
</div>

</div>
</div>

<br><br><br><br><br>

<div class="about">

<h2>Introduction</h2> 
<p>Titan Martial Club is a mixed martial arts club currently located in Mwatate, Taita- Taveta County and it comprises of practitioners from different martial arts disciplines, for example, Karate, Taekwondo, Boxing, Muay Thai, Kick Boxing, etc.</p><br> 
<h2>Background</h2>
<p>The club was formed in early 2020 by the Founders Andrew Konde and Lescer Kanjele, with the aim of Mixed Martial Arts Training for overall body fitness, self- defense, and Martial Arts Demonstrations.</p><br>
<h2>Objectives</h2>
<p>The main objectives of Titan Martial Club are:</p>
<p>1. Mixed Martial Arts Training</p>
<p>2. Self- Defense</p>
<p>3. Martial Arts Demonstration</p>
<p>4. Acting</p>
<p>5. Advertising</p><br>
<p>The club is still growing, and more people who are willing are welcome to join.<p>
<p>We currently do not have a permanent dojo (a training hall/ building/ place), so we train wherever suitable, a place free from much distraction.</p><br>
<h2>Mission</h2>
<p>We would like to be good ambassadors of Martial Arts to the world to the best of our ability, spreading awareness on the same and its endless benefits.</p><br>
<h2>Vision</h2>
<p>To be a leading company in and out of the region and to provide as much value as possible to the society.</p><br>

<style>
.about{
background-color: white;
padding: 5px;


}

</style>

</div>




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