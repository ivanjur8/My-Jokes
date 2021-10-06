<?php
require "header.php";
date_default_timezone_set("Europe/Copenhagen");
include  'dbh.inc.php';
include  'comments.inc.php';
include  'commentsSarkazam.inc.php';
include  'commentssatira.inc.php';
include  'commentsparodija.inc.php';
include  'users.inc.php';

?>

<main>

  <?php  if (isset($_SESSION['userId'])) : ?>
   <div class="admin-part">
   	<?php 
   	$id = $_SESSION['userId'];
       
   	$UserName = getUserName($conn, $id);

   	$UserType = getUserType($conn, $id);
   	

   ?>

    <div class="title">Dobrodošao <?php echo $UserName; ?> ( <?php if ($UserType == 1){ echo 'Super Administrator';}else {echo 'Administrator';} ?>)</div>
	<?php if ($UserType == 1){ ?>
	   <div class="edit-users">
	   	<h2>Uređivanje Korisnika</h2>
	   	<a href="/signup.php"><button>Dodaj Korisnika</button></a>
	   	   <table  class="table">
	   	     <thead>
	   	       <tr>
	   	         <th>ID</th>
	   	         <th>Ime</th>
	   	         <th>Email</th>
	   	         <th>Vrsta Korisnika</th>
	   	         <th>Uređivanje</th>
	   	         
	   	       </tr>
	   	     </thead>
	   	     <tbody>
	   	      <?php getUserList($conn); ?>
	   	      
	   	     </tbody>
	   	    
	   	   </table>
	   </div>
	<?php } else {
		echo 'Molim prijavite se kao Super Administator da bi uređivali korisnike';
	} ?>
   	  
   </div>
   <?php endif; ?>
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