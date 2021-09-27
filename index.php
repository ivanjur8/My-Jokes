<?php
require "header.php";
date_default_timezone_set("Europe/Copenhagen");
include  'dbh.inc.php';
include  'comments.inc.php';
include  'commentsSarkazam.inc.php';
include  'commentssatira.inc.php';
include  'commentsparodija.inc.php';

?>

<main>
    <div>

		<img src="img/slika.jpg"  class="img-fluid" alt="Responsive image" style="width: 100%;" >
	</div>
	<?php
	
	if(isset($_SESSION['userId'])){
		echo'<img src="img/slika.jpg"  class="img-fluid" alt="Responsive image" style="width: 100%;" >';
	}
	else{
		echo'<img src="img/slika.jpg"  class="img-fluid" alt="Responsive image" style="width: 100%;" >';
	}
	
	?>


</main>

<?php
require "footer.php";

?>