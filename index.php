<?php
require "header.php";

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