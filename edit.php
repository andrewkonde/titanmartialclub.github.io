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
<title>Edit My Details</title>

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
	echo ($_SESSION['username']."   ".'<a href="logout.php"><span>Logout</span></a>');
     
    }
  elseif($_SESSION['logged']===false)
    {
      echo '<a href="loginregister.html"><span>Login/ Sign Up</span></a>';
    }
?>
</div>

</div>
</div>

<br><br><br><br><br>

<div class="register">

<div class="form">



<form action="editing.php" method="POST" enctype="multipart/form-data"><br>
<p>Please edit your details according to your preference</p>
<input type="text" name="name" placeholder="Full Name" required><br>
<input type="text" name="phone" placeholder="Phone Number" required><br>
dob<input type="date" name="dob" placeholder="Date Of Birth" required><br>
<input type="text" name="email" placeholder="Email" required><br>
<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password1" placeholder="New Password" required><br>
<input type="password" name="password2" placeholder="Confirm New Password" required><br>
<div class="myphoto"><label>Picture</label><input type="file" name="pic" placeholder="Profile Picture" required></div>
<button name="submit" type="submit" value="submit">Register</button><br>


</form>
</div>


<style>
.register{
background-color: white;
padding: 5px;

width: auto;
height: 600px;
margin: auto;


}

.form{
height: 300px;
margin-left: 40%;
margin-right: 40%;
margin-top: 8%;
background-color: red;
text-align: center;
}

.form .myphoto{
padding-left: 18px;
display: flex;
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