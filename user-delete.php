<?php  
require "header.php";
include "dbh.inc.php";
$id = $_GET['id'];

$sql = "DELETE FROM users WHERE idUsers = $id";
?>
<main>
 <div class="admin-part">
 	<?php  
		if ($conn->query($sql) === TRUE) {
		  echo "Korisnik je uspješno izbrisan";
		} else {
		  echo "Error " . $conn->error;
		}
   ?>

  <br> <a href="/">Natrag</a>

  </div>
</main>

<?php require "footer.php";?>