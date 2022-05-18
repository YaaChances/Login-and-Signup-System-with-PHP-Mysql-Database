<?php 
session_start();

       include("connections.php");
        include("functions.php");

         $user_data = check_Login($con);

 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Landing Page</title>
</head>
<body>
        
       <a href="logout.php">Logout</a>
       <h1>This is the Login Landing Page</h1>

       <br>
       Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>