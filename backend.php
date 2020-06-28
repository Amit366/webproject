<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "market_duniya";

$fname=$_POST['subscriber_fname'];
$lname=$_POST['subscriber_lname'];
$gender=$_POST['subscriber_gender'];
$city=$_POST['subscriber_city'];
$country=$_POST['subscriber_country'];
$espassword=$_POST['subscriber_password'];
$email=$_POST['subscriber_email'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO subscriber_details (subscriber_fname, subscriber_lname, subscriber_email,subscriber_gender,subscriber_city,subscriber_country,subscriber_password)
VALUES ('$fname','$lname','$email','$gender','$city','$country','$espassword')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
if(isset($_POST['submit']))
{
  echo "<br> hi ! ".$fname;
  ?>
  <a href="webpage1.php">Click here to go to home page</a>
  <?php


}
$conn->close();
?>