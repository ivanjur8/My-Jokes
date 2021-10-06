<?php


function setCommentsSatira($conn) {
  if(isset($_POST['commentSubmitSatira'])){
    $uidSatira=$_POST ['uid'];
    $dateSatira=$_POST ['date'];
    $messageSatira=$_POST ['messageSatira'];

    $sql = "INSERT INTO commentssatira (uid, date, messageSatira) VALUES ('$uidSatira', '$dateSatira', '$messageSatira')";
    $result = $conn->query($sql);
  }
}

function getCommentsSatira($conn) {
$sql = "SELECT * FROM commentssatira";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())

echo '<div class="col-sm"><img src="img\slika3.png" />' . $row['messageSatira'] .  '</div>';




}


?>