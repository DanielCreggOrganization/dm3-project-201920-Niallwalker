<?php

session_start();


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'vw audi world');

$username = $_POST['username'];
$password = $_POST['password'];

$s= "select * from usertable where username = '$username' && password ='$password'";
$hashed = "SELECT password FROM usertable WHERE username = '$password'";
$hashed_password = mysqli_query($con, $hashed);
$list = mysqli_fetch_array($hashed_password, MYSQLI_NUM);


$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1 || password_verify($password, $list[0])){
	//cookie set for 30 days
	setcookie('username', $username, time() + 604800);
	$_SESSION['username']= $username;
	header('location:../Main.html');
}else{
	header('location:login_db.php');
}

?>

