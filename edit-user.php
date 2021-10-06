<?php
require "header.php";
include  'dbh.inc.php';
$id = $_GET['id'];
?>

<main>
<div class="wrapper-main">
<div class="container">
    <div class="row"  >
        <div class="col-md-12" style="margin-top:100px;">
            <section class ="section-default">
                <h1>Uredi Korisnika</h1>

                <?php
                
                    if (isset($_GET['error'])){
                        if($_GET['error'] == "emptyfilds"){
                            echo'<p class="signuperror">Unesi sve podatke</p>';
                        }
                        else if($_GET['error'] == "invaliduidmail"){
                            echo'<p class="signuperror">Nevaljano ime ili e-mail</p>';
                        }
                        else if($_GET['error'] == "invaliduid"){
                            echo'<p class="signuperror">Nevaljano ime </p>';
                        }
                        else if($_GET['error'] == "invalidmail"){
                            echo'<p class="signuperror">Nevaljan e-mail</p>';
                        }
                        else if($_GET['error'] == "passwordcheck"){
                            echo'<p class="signuperror">Nevaljana lozinka</p>';
                        }
                        else if($_GET['error'] == "usertaken"){
                            echo'<p class="signuperror">Korisničko ime je već zauzeto</p>';
                        }
                        
                    }
                    else if (isset($_GET["signup"])) {
                        if ($_GET["signup"] == "success") {
                          echo '<p class="signupsuccess">Uspješno registrirani!</p>';
                        }
                    }
                    
                    $sql = "SELECT * FROM users WHERE idUsers = $id";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();

                    $name = $row['uidUsers'];
                    $email = $row['emailUsers'];
                    $UserType = $row['UserType'];

                
                ?>
            

            <form class="form-horizontal" action="edituser.inc.php?id=<?php echo $id ?>" method="post">

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Ime</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="uid" placeholder="Ime" value="<?php echo $name; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="mail" placeholder="E-mail" value="<?php echo $email; ?>">
                    </div>
                </div>

               
               <div class="form-group">
                 <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="UserType" id="inlineRadio1" value="1" <?php if ($UserType == 1) {
                    echo 'checked';}  ?>>
                   <label class="form-check-label" for="inlineRadio1">Super Administrator</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="UserType" id="inlineRadio2" value="0" <?php if ($UserType == 0) {
                    echo 'checked';}  ?> >
                   <label class="form-check-label" for="inlineRadio2">Administrator</label>
                 </div>
                </div>
                <div class="form-group"style="margin-top:40px;">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" href="jokes.php" class="form-control" class="btn btn-default bg-dark" name="signup-submit">Uredi</button>
                        

                    </div>
                </div>
                </div>
                </form>
                </section>


</main>

<?php
require "footer.php";

?>