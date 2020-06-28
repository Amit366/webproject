
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "market_duniya";
$email=$_POST['subscriber_email'];
$espassword=$_POST['subscriber_password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM subscriber_details WHERE subscriber_email='$email' && subscriber_password='$espassword'";
$result = $conn->query($sql);
$num =mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['subscriber_email']=$email;
	header('location: home.html');

}
else
{
	header('location:login.html');
}