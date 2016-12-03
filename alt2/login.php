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
		$error = "Fel lösenord! Försök igen.";
	}
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Kristianstad Truckmeet - Inloggning</title>
        <meta name="viewport" content="width=device-width, initial-scale=0.9">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme-red.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="main-container">
            <section class="cover fullscreen image-bg overlay">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/ktm/truck.jpg" />
                </div>
                <div class="container v-align-transform">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
                            <div class="feature bordered text-center">
                                <img src="img/ktm/logo-white.png" alt="" class="mb24">
                                <form class="text-left" action="" method="POST">
                                   <p class="text-white text-center mb0"><?php echo isset($error) ? $error : '' ?></p>
                                    <input class="mb0" name="password" type="password" placeholder="Lösenord" autofocus/>
                                    <input type="submit" value="Logga in" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>