<?php

session_start();
header('location:login_db.php');

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'vw audi world');

$username = $_POST['username'];
$password = $_POST['password'];


$s= "select * from usertable where username = '$username'";

$hashed = "SELECT password FROM usertable WHERE username = '$password'";
$hashed_password = mysqli_query($con, $hashed);
$list = mysqli_fetch_array($hashed_password, MYSQLI_NUM);


$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);



if($num==1 || password_verify($password, $list[0])){
	echo" Username Already Taken";
}else{
	$reg= " insert into usertable(username,password) values ('$username', '$password')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

?>
