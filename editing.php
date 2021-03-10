<?php
session_start();
if(!(isset($_SESSION["logged"]) && $_SESSION["logged"] === true)){
	header("location: loginregister.html");
    exit;
}
?>

<?php

$name=($_POST["name"]);
$phone=($_POST["phone"]);
$dob=($_POST["dob"]);
$email=($_POST["email"]);
$username=($_POST["username"]);
$pass=($_POST["password1"]);
$pass2=($_POST["password2"]);
$img=addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));


if($pass==$pass2){
	
	/*
echo ("Name: ".$name.'<br>');
echo ("Phone: ".$phone.'<br>');
echo ("DOB: ".$dob.'<br>');
echo ("Email: ".$email.'<br>');
echo ("Username: ".$username.'<br>');
echo ("Password: ".$pass.'<br>');
*/

$host="localhost";
$user="root";
$password="";
$database="titan";

$hashedpass= (password_hash($pass, PASSWORD_DEFAULT));

$connection=new mysqli("$host", "$user", "$password", "$database");
if(!$connection){
	die ("Connection Failed: ".$connection->connect_error);
}

$sql=("DELETE FROM members WHERE username='$username'");
$delete=($connection->query($sql));
if($delete){

$sql=("INSERT INTO members(name, phone, dob, email, username, pass, image) VALUES('$name', '$phone', '$dob', '$email', '$username', '$hashedpass', '$img')");
$insert=($connection->query($sql));
if($insert){
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submitted successfully! You can now Log in');";
echo "</script>";
$URL="logout.php";
echo "<script>location.href='$URL'</script>";
	
}else{
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submission failed! Please try again.');";
echo "</script>";
$URL="edit.php";
echo "<script>location.href='$URL'</script>";

}
}else{
	
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Details submission failed! Please try again.');";
echo "</script>";
$URL="edit.php";
echo "<script>location.href='$URL'</script>";

}

}else{

echo "<script language='javascript' type='text/javascript'>";
echo "alert('The passwords do not match, Please try again');";
echo "</script>";
$URL="edit.php";
echo "<script>location.href='$URL'</script>";


}



?>

