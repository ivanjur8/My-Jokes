<?php


function setCommentsSarkazam($conn) {
  if(isset($_POST['commentSubmitSarkazam'])){
    $uidSarkazam=$_POST ['uid'];
    $dateSarkazam=$_POST ['date'];
    $messageSarkazam=$_POST ['messageSarkazam'];

    $sql = "INSERT INTO commentssarkazam (uid, date, messageSarkazam) VALUES ('$uidSarkazam', '$dateSarkazam', '$messageSarkazam')";
    $result = $conn->query($sql);
  }
}

function getCommentsSarkazam($conn) {
$sql = "SELECT * FROM commentssarkazam";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())

echo '<div class="col-sm"><img src="img\slika3.png" />' . $row['messageSarkazam'] .  '</div>';




}


?>
