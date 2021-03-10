<?php
session_start();
?>

<?php
if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
    header("location: index.php");
    exit;
}
?>


<?php

$username=($_POST['username']);
$userpass=($_POST['password']);

	
	/*
echo ("Username: ".$username.'<br>');
echo ("Password: ".$userpass.'<br>');
*/

$host="localhost";
$user="root";
$password="";
$database="titan";

//$hashedpass= (password_hash("$password", PASSWORD_DEFAULT));

$connection=new mysqli("$host", "$user", "$password", "$database");
if(!$connection){
	die ("Connection Failed: ".$connection->connect_error);
}
//----------------------------------------------------------------------------------------------
$s="SELECT username FROM members WHERE username='$username'";
$valid=(mysqli_query($connection, $s));
$validmember=(mysqli_fetch_array($valid));

if(!$validmember){
	
	$_SESSION['logged']=false;
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Username not Found! Please try again.');";
echo "</script>";
$URL="loginregister.html";
echo "<script>location.href='$URL'</script>";

}else{
	//$_SESSION['logged']===true;
$s="SELECT username FROM members WHERE username='$username'";
$valid=(mysqli_query($connection, $s));
if($valid->num_rows>0){
while($row=mysqli_fetch_array($valid)){
	$currentuser=$row['username'];
	$_SESSION['username']=$currentuser;
	
}

$sql="SELECT pass FROM members WHERE username='$username'";
$pass=(mysqli_query($connection, $sql));

if($pass->num_rows>0){
while($row=mysqli_fetch_array($pass)){
	$passresult=$row['pass'];
	//$_SESSION['password']=$passresult;
}

//mysql_result($result, 0);

if (password_verify($userpass, $passresult)) {
	
	//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
	
$sql3="SELECT image FROM members WHERE username='$username'";
$result=(mysqli_query($connection,$sql3));
if($result->num_rows>0){
while($row= mysqli_fetch_array($result)){
	$mypic=($row['image']);
	$_SESSION['image']=$mypic;
	//echo ('<img src="data:image/jpeg;base64,'.base64_encode($row['schoollogo']).'">');
}
	//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
	
	$_SESSION['logged']=true;
	$_SESSION['username']=$_SESSION['username'];
	$_SESSION['image']=$_SESSION['image'];
	//$_SESSION['password']=$_SESSION['password'];
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Login Successful!');";
echo "</script>";
$URL="index.php";
echo "<script>location.href='$URL'</script>";
}else{
$_SESSION["logged"]=false;
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Image not Found! Please try again.');";
echo "</script>";
$URL="loginregister.html";
echo "<script>location.href='$URL'</script>";
}
}else {
	
	$_SESSION["logged"]=false;
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Incorrect Password! Please try again.');";
echo "</script>";
$URL="loginregister.html";
echo "<script>location.href='$URL'</script>";
}

}

}








}

//-----------------------------------------------------------------------------------------------



?>

