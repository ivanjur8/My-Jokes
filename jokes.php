<?php
require "header.php";
date_default_timezone_set("Europe/Copenhagen");
include  'dbh.inc.php';
include  'comments.inc.php';
include  'commentssarkazam.inc.php';
include  'commentssatira.inc.php';
include  'commentsparodija.inc.php';

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

	<title>My Jokes</title>
  <style>

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


	body {
	    height: 100%;
	    margin: 0;
	    font-family: 'Open Sans', sans-serif;
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
</head>
<body>

<main>
            <section class="keyvisual">
                <img src="img\kvimg.png" />
            </section>
            <section class="box">
                <div class="container">
                    <div class="row">
                        <div class="col"><h1 id=jokes>Jokes</h1></div>
                    </div>
										<div class="ironija">
										<div class="row title">	<div class="col-sm-12"><h2>Ironija</h2></div></div>
                    <div class="row item-wr owl-carousel owl-theme">
												<?php
												getComments($conn);
											?>
										</div>
										<div class="ironija-comments comments-comtainer">
											<?php

													echo '<form method="POST" action='.setComments($conn).'><input type = "hidden" name = "uid" value="Anonymous"/>
													<input type = "hidden" name = "uid" value="Anonymous"/>
													<input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'">
													<textarea type = "text" name ="message" rows = "6" col = "250" placeholder = "comment here....">
													</textarea>
													<button class="main-btn" name ="commentSubmit"  type = "submit">Comment</button>
													</form>';
													echo '</table>';


											 ?>
										</div>
										</div>
										<div class="row title">	<div class="col-sm-12"><h2>Sarkazam</h2></div></div>
										<div class="row item-wr owl-carousel owl-theme">
												<?php
												getCommentsSarkazam($conn);
											?>
										</div>
										<div>
											<div class="sarkazam-comments comments-comtainer">
												<?php
														echo '<form method="POST" action=	'.setCommentsSarkazam($conn).'><input type = "hidden" name = "uid" value="Anonymous"/>
														<input type = "hidden" name = "uid" value="Anonymous"/>
														<input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'">
														<textarea type = "text" name ="messageSarkazam" rows = "6" col = "250" placeholder = "comment here....">
														</textarea>
														<button class="main-btn" name ="commentSubmitSarkazam"  type = "submit">Comment</button>
														</form>';
														echo '</table>';

														// getComments($conn);
												 ?>

											</div>

										</div>
										<div class="row title">	<div class="col-sm-12"><h2>Satira</h2></div></div>
										<div class="row ite-wr owl-carousel owl-theme">
											<?php
												getCommentsSatira($conn);
											?>
										</div>
										<div class="satira-comments comments-comtainer">
												<?php
															echo '<form method="POST" action= '.setCommentsSatira($conn).'><input type = "hidden" name = "uid" value="Anonymous"/>
															<input type = "hidden" name = "uid" value="Anonymous"/>
															<input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'">
															<textarea type = "text" name ="messageSatira" rows = "6" col = "250" placeholder = "comment here....">
															</textarea>
															<button class="main-btn" name ="commentSubmitSatira"  type = "submit">Comment</button>
															</form>';
															echo '</table>';

															// getComments($conn);
												?>

										</div>

										

										</div>
										<div class="row title">	<div class="col-sm-12"><h2>Parodija</h2></div></div>
										<div class="row owl-carousel item-wr owl-theme">
												<?php
													getCommentsParodija($conn);
												?>
										</div>
										<div class="parodija-comments comments-comtainer">
													
												<?php
														echo '<form method="POST" action=	'.setCommentsParodija($conn).'><input type = "hidden" name = "uid" value="Anonymous"/>
														<input type = "hidden" name = "uid" value="Anonymous"/>
														<input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'">
														<textarea type = "text" name ="messageParodija" rows = "6" col = "250" placeholder = "comment here....">
														</textarea>
														<button class="main-btn" name ="commentSubmitParodija"  type = "submit">Comment</button>
														</form>';
														echo '</table>';

														// getComments($conn);
												?>	
										</div>
			</section>
        </main>
        
        <?php
			require "footer.php";

		?>
		</div>
    </div>


    <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- Vue JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>
<!-- jQuery -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
		<script type="text/javascript">
	    $(document).ready(function() {
	    $('.owl-carousel').owlCarousel({});

		});
	</script>
</body>
</html>
