<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vw audi world";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<select name= "dropdown">
<?php
$myData = mysqli_query($conn, "SELECT * FROM AUDI");
		while($record = mysqli_fetch_array($myData)){
			echo '<option value="' . $record['MAKE' ]. '.' . $record['MODEL']. '">' .$record['ENGINE']. '</option>';
			
		}

?>
<select name= "dropdown1">
<?php
$myData = mysqli_query($conn, "SELECT * FROM VW");
		while($record = mysqli_fetch_array($myData)){
			echo '<option value="' . $record['MAKE' ]. '.' . $record['MODEL']. '">' .$record['ENGINE']. '</option>';
			
		}

?>
</select>