<?php
	session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>MyJOKES</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed;width: 100%">
		<a class="navbar-brand" href="#">Jokes</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="jokes.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Jokes
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="jokes.php">Ironija</a>
						<a class="dropdown-item" href="jokes.php">Sarkazam</a>
						<a class="dropdown-item" href="jokes.php">Satira</a>
						<a class="dropdown-item" href="jokes.php">Parodija</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="O_NAMA.php">O nama</a>
				</li>
			</ul>
			<?php
	
			if(isset($_SESSION['userId'])){
				echo'<form action="includes/logout.inc.php" method="post">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout-submit">Odjavi se</button>
            </form>';
			}
			else{
				echo'<form  class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
                <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Ime/e-mail..." >
                <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Lozinka..." >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="login-submit">Prijavi se</button>
            </form>
            <button class="btn btn-outline-success my-2 my-sm-0"  type="submit" name="signeup-submit"><a href="signup.php">Registriraj se</a> </button> ';
			}
	
			?>

		    
		</div>
	</nav>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');
		body {
			background: linear-gradient(0deg, #fff, 50%, #DEEEFE);
			font-family: 'Rubik', sans-serif;
			height: 100 !important
		}

		.container-fluid {
			overflow: hidden;
			background: #262626;
			color: #627482 !important;
			margin-bottom: 0;
			padding-bottom: 0
		}

		small {
			font-size: calc(12px + (15 - 12) * ((100vw - 360px) / (1600 - 360))) !important
		}

		.bold-text {
			color: #989c9e !important
		}

		.mt-55 {
			margin-top: calc(50px + (60 - 50) * ((100vw - 360px) / (1600 - 360))) !important
		}

		h3 {
			font-size: calc(34px + (40 - 34) * ((100vw - 360px) / (1600 - 360))) !important
		}

		.social {
			font-size: 21px !important
		}

		.rights {
			font-size: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important
		}
	</style>

</header>