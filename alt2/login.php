<?php

session_start();

if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
	// redan inloggade
	header('Location: index.php');
	die();
}

if (isset($_POST['password']) && !empty($_POST['password'])) {
	if ($_POST['password'] == "truckmeet") {
		// Nu är man inloggad
		$_SESSION['admin'] = 1;
		header('Location: index.php');
		die();
	} else {
		// Fel lösenord
		echo "Fel lösenord! Försök igen.";
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inloggning</title>
</head>
<body>
	
<form action="" method="POST">
	Lösenord: <input type="password" name="password">
	<input type="submit" value="Logga in">
</form>

</body>
</html>