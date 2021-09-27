<?php
require "header.php";

?>

<main>
<div class="wrapper-main">
<div class="container">
    <div class="row"  >
        <div class="col-md-12" style="margin-top:100px;">
            <section class ="section-default">
                <h1 >Registracija</h1>

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
                
                
                ?>
            

            <form class="form-horizontal" action="includes/signup.inc.php" method="post">

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Ime</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="uid" placeholder="Ime">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="mail" placeholder="E-mail">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Lozinka</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="pwd" placeholder="Lozinka">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input" class="col-sm-2 control-label">Potvrdi Lozinka</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="pwd-repeat" placeholder="Potvrdi Lozinka">
                    </div>
                </div>

                <div class="form-group"style="margin-top:40px;">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="form-control" class="btn btn-default bg-dark" name="signup-submit">Pošalji</button>
                        <a href="read.php" link="link-primary">View</a>

                    </div>
                </div>
                </div>
                </form>
                </section>


</main>

<?php
require "footer.php";

?>