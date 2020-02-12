<?php
session_start();
$db_username = 'mautorsadmin';
$db_password = 'mautorspassword';
$db_name     = 'mautorsdb';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');
$email = $_SESSION['email'];
$requete = "SELECT * FROM T_Utilisateur WHERE  email = '".$email."' ";
$resultat = $db->query($requete);
?>

<!DOCTYPE html>
<html>
<!--------php--------->
<?php
include 'head.php';
include 'menu.php';
?>

<body style="background-image: url(&quot;assets/img/star-sky.jpg&quot;);">
    <div class="row" style="background-image: url(&quot;assets/img/star-sky.jpg&quot;);">
        <div class="col">
            <div class="container profile profile-view" id="profile" style="margin-top: 237px;background-color: rgba(47,47,47,0.69);margin-bottom: 46px;">
                <form>
                    <div class="form-row profile-row">
                        <div class="col-md-4 relative">
                            <div class="avatar">
                                <div class="avatar-bg center"></div>
                            </div><input type="file" class="form-control" name="avatar-file"></div>
                        <div class="col-md-8">
                            <h1 style="color: rgb(255,255,255);">Profile </h1>
                            <hr>
                            <div class="form-row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><label style="color: rgb(255,255,255);">First Name</label><input class="form-control" type="text" name="firstname" value="<?php while ($ligne = $resultat->fetch_assoc()) {echo  ''.$ligne['prenom'].'';}?>" required=""></div>
                                    <div class="form-group"><label style="color: rgb(255,255,255);">Address</label><input class="form-control" type="text" name="firstname" value="<?php while ($ligne = $resultat->fetch_assoc()) {echo  ''.$ligne['adress'].'';}?>" required=""></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><label style="color: rgb(255,255,255);">Lastname </label><input class="form-control" type="text" name="lastname" value="<?php while ($ligne = $resultat->fetch_assoc()) {echo  ''.$ligne['nom'].'';}?>" required=""></div>
                                    <div class="form-group"><label style="color: rgb(255,255,255);">Location</label><input class="form-control" type="text" name="lastname" value="<?php while ($ligne = $resultat->fetch_assoc()) {echo  ''.$ligne['ville'].'';}?>" required=""></div>
                                </div>
                            </div>
                            <div class="form-group"><label style="color: rgb(255,255,255);">Phone</label><input class="form-control" type="tel" required=""></div>
                            <div class="form-group"><label style="color: rgb(255,255,255);">Email </label><input class="form-control" type="email" value="<?php while ($ligne = $resultat->fetch_assoc()) {echo  ''.$ligne['email'].'';}?>" required=""></div>
                            <div class="form-row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><label style="color: rgb(255,255,255);">Password </label><input class="form-control" type="password" required=""></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><label style="color: rgb(255,255,255);">Confirm Password</label><input class="form-control" type="password" required=""></div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-row">
                                <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">SAVE </button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include 'footer.php';
include 'script.php';
?>
</body>

</html>