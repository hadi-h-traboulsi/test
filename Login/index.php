<?php 
session_start();
$_SESSION;
$user_data = check_login($con);


?>
<DOCTYPE html>
<head>
<title> My website</title>
</head>
<body>
<a href="logout.php">Logout</a>
<h1>This is the index page</h1>
<br>
Hello, Username.
</body>
</html>

