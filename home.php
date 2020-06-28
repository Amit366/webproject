<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['subscriber_email']; ?></h1>
	<a href="webpage1.php">Click here for home page</a>
</body>
</html>