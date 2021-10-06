<?php  
require "header.php";
include "dbh.inc.php";
$id = $_GET['id'];

$username =$_POST['uid'];
$email =$_POST['mail'];
$password =$_POST['pwd'];
$passwordRepeat =$_POST['pwd-repeat'];
$UserType =$_POST['UserType'];

$sql = "UPDATE users SET  emailUsers='$email'   WHERE idUsers=$id";
?>
<main>
 <div class="admin-part">
    <?php  
        if ($conn->query($sql) === TRUE) {
          echo "Korisnik je uspješno uređen";
        } else {
          echo "Error " . $conn->error;
        }
   ?>

  <br> <a href="/">Natrag</a>

  </div>
</main>

<?php require "footer.php";?>



