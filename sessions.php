<?php
//Start session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sessions - PHP</title>
</head>
<body>
<?php
	//Set session variable
	$_SESSION['username'] = 'devuser';
	$_SESSION['email'] = 'devuser@gmail.com';+

	echo 'Session vars set.';
?>
</body>
</html>