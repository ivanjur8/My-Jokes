<?php


function setCommentsParodija($conn) {
  if(isset($_POST['commentSubmitParodija'])){
    $uidParodija=$_POST ['uid'];
    $dateParodija=$_POST ['date'];
    $messageParodija=$_POST ['messageParodija'];

    $sql = "INSERT INTO commentsparodija (uid, date, messageParodija) VALUES ('$uidParodija', '$dateParodija', '$messageParodija')";
    $result = $conn->query($sql);
  }
}

function getCommentsParodija($conn) {
$sql = "SELECT * FROM commentsparodija";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())

echo '<div class="col-sm"><img src="img\slika3.png" />' . $row['messageParodija'] .  '</div>';




}


?>
