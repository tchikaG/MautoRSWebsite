<?php

$db_username = 'mautorsadmin';
$db_password = 'mautorspassword';
$db_name     = 'mautorsdb';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');

$oldmail =$_SESSION['email'];
       
$email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
$nom = mysqli_real_escape_string($db,htmlspecialchars($_POST['lastname'])); 
$prenom = mysqli_real_escape_string($db,htmlspecialchars($_POST['firstname'])); 
$datenaiss = mysqli_real_escape_string($db,htmlspecialchars($_POST['datenaiss']));
$adress = mysqli_real_escape_string($db,htmlspecialchars($_POST['adress'])); 
$location = mysqli_real_escape_string($db,htmlspecialchars($_POST['location'])); 
$password = mysqli_real_escape_string($db,htmlspecialchars(md5($_POST['password'])));


$requete = "SELECT count(*) FROM T_Utilisateur where 
         email = '".$oldmail."' and motdepasse = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];

if (isset($email) && isset($nom) && isset($prenom) && isset($datenaiss) && isset($adress) && isset($location) && isset($password))
{
$requete1 = "UPDATE T_Utilisateur SET nom = '".$nom."', prenom = '".$prenom."', datenaiss = '".$datenaiss."', adress = '".$adress."', ville = '".$location."', email = '".$email."' WHERE email = '".$oldmail."' ";
$exec_requete1 = mysqli_query($db,$requete1);
echo 'executé';
session_start();
$_SESSION['email'] = $email;
sleep (1);
}
else
{
    echo 'test';
}
?>

<hr>
<form method="POST">
<div class="form-row">
    <div class="col-sm-12 col-md-6">
        <div class="form-group"><label style="color: rgb(255,255,255);">First Name</label><input class="form-control" type="text" name="firstname" value="<?php echo  $ligne['prenom'] ?>" required=""></div>
        <div class="form-group"><label style="color: rgb(255,255,255);">Address</label><input class="form-control" type="text" name="adress" value="<?php echo  $ligne['adress'] ?>" required=""></div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group"><label style="color: rgb(255,255,255);">Lastname </label><input class="form-control" type="text" name="lastname" value="<?php echo  $ligne['nom'] ?>" required=""></div>
        <div class="form-group"><label style="color: rgb(255,255,255);">Location</label><input class="form-control" type="text" name="location" value="<?php echo  $ligne['ville'] ?>" required=""></div>
    </div>
</div>
<div class="form-group"><label style="color: rgb(255,255,255);">Birtday</label><input class="form-control" type="datenaiss"  value="<?php echo  $ligne['datenaiss'] ?>"required=""></div>
<div class="form-group"><label style="color: rgb(255,255,255);">Email </label><input class="form-control" type="email" value="<?php echo  $ligne['email'] ?>" required=""></div>
<div class="form-row">
    <div class="col-sm-12 col-md-6">
        <div class="form-group"><label style="color: rgb(255,255,255);">Password </label><input class="form-control" type="password"  value="********" readonly></div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group"><label style="color: rgb(255,255,255);">Confirm Password</label><input class="form-control" type="password" name="password"></div>
</div>
</div>
<hr>
<div class="form-row">
    <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" onclick="window.location.href='compte.php'">BACK</button><button class="btn btn-primary form-btn" type="submit" style="font-family: Cabin, sans-serif;">SAVE</button></div>

</div>
</div>
</form>