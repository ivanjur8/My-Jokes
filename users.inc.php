<?php

function getUserName($conn , $id ) {
$sql = "SELECT uidUsers FROM users WHERE idUsers = $id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
return $row['uidUsers'];
}

function getUserType($conn , $id ) {
$sql = "SELECT * FROM users WHERE idUsers = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
return  $row['UserType'];
}

function getUserList($conn) {
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
echo '<tr>
        <td>' . $row['idUsers'] .  '</td>
        <td>' . $row['uidUsers'] .  '</td>
        <td>' . $row['emailUsers'] .  '</td>
        <td>' . $row['UserType'] .  '</td>
        <td><a href="/edit-user.php?id=' . $row['idUsers'] .  '">Uredi</a> / <a href="/user-delete.php?id=' . $row['idUsers'] .  '">Izbriši</a></td>
        
     </tr>';
}

?>
