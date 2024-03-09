<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

	<?php
	// Scalar Types (contains one value)
	$string = "Marc";
	$int = 1234567;
	$float = 123.54;
	$bool_true = true;
	$bool_false = false;
	
	// Array type
	$array = array("Marc", "Van", "Josh", "Mariel");
	$array_1 = ["Marc", "Van", "Josh", "Mariel"];

	// Object Type
	// $object = new Car();

	// Built-in Variables
	$_SERVER["DOCUMENT_ROOT"];
	$_SERVER["PHP_SELF"];
	$_SERVER["SERVER_NAME"];
	$_SERVER["REQUEST_METHOD"];
	?>

	<p>Hi! My name is <?php echo $string ?>, and I'm learning PHP!</p>

	<?php
	$_GET["name"]; // Used only if you want to get data from a database or get data you just want to show to user.
	$_GET["eyecolor"];
	$_POST["name"]; // If you want to submit a data to a website or database, use $_POST method.
	$_REQUEST["name"]; // Get both $_GET, $_POST, COOKIES (can induce security damage because of you will not know what type of data you will get).
	$_FILES["name"]; // Using this users can upload file from the website and we can check its information and contents.
	$_COOKIE["name"];
	$_SESSION["username"] = "Marc Malacas"; // Can store user information on the server side.
	$_SESSION["username"];
	$_ENV[]; // 'Environment Variable' is a very sensitive data that should not be accessible by the user or any other environments.
	?>

</body>
</html>