<?php
	session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">



	<title>MyJOKES</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed;width: 100%;z-index:999;">
		<img src="img/marriage-jokes.jpg"  style="width: 50px;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="O_NAMA.php">O nama</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="jokes.php">Jokes</a>
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
		
html {
	width: 100%;
	height: 100%;
	font-size: 100%;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	text-rendering: optimizeLegibility;
	font-weight: normal;
	height: 100%;
}



img {
	width:100%
}



main section.keyvisual {
position:relative;
max-width:1920px;
width:100%;
	margin-bottom:100px
}

main section.keyvisual img{
width: 100%;
height: 100%;
	vertical-align: top;
max-width: 100%;
height: auto;
}





h2 {
	 color:#004070;
		 font-size:32px;
		margin-bottom:15px;
 }

h1 {
font-size:50px;
 color:#004070;
 text-align: center;
}

.box .item {
margin-bottom:30px;
}

.box .item-wr p {
margin-top:10px;
}

.container-comment {
max-width: 640px;
margin: 30px auto;
background: #fff;
border-radius: 8px;
padding: 20px;
}

.comment {
display: block;
transition: all 1s;
}
.commentClicked {
min-height: 0px;
border: 1px solid #eee;
border-radius: 5px;
padding: 5px 10px
}

textarea {
width: 100%;
border: none;
background: #E8E8E8;
padding: 5px 10px;
border-radius: 5px 5px 0px 0px;
border-bottom: 2px solid #016BA8;
transition: all 0.5s;
margin-top: 15px;
}
button.primaryContained {
background: #016ba8;
color: #fff;
padding: 10px 10px;
border: none;
margin-top: 0px;
cursor: pointer;
text-transform: uppercase;
letter-spacing: 4px;
box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.25);
transition: 1s all;
font-size: 10px;
border-radius: 5px;
}
button.primaryContained:hover {
background: #95C11F;
}




.main-btn {
padding: 10 20px;
background: #81a996;
text-align: center;
width: auto;
margin: 15px 0;
border: none;
background: #004070;
color: #ffffff;
text-transform: uppercase;
	transition: all 0.5s;
}
.main-btn:hover {
background:#95C11F;
}


</style>

</header>