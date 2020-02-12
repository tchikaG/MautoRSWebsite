<?php
session_start();
$db_username = 'mautorsadmin';
$db_password = 'mautorspassword';
$db_name     = 'mautorsdb';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');
$email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
$requete = "SELECT count(*) FROM T_Utilisateur where 
email = '".$email."' ";
$exec_requete = mysqli_query($db,$requete);
$reponse      = mysqli_fetch_array($exec_requete);
$count = $reponse['count(*)'];
if($count>=1) // nom d'utilisateur et mot de passe correctes
{
    $requete1 = "UPDATE T_Utilisateur SET motdepasse = 'b62885129ee6b6a5d7188a2863907bad' WHERE email = '".$email."' ";
            $exec_requete1 = mysqli_query($db,$requete1);
            echo $requete1;
            sleep (1);

            $email_from = "noreplay@mautors.com";
            $email_to = $_POST['email']; // required            
            $email_subject = "Password reset";
            
            $email_message = "Reset mot de passe : \n\n";
         
            function clean_string($string) {
              $bad = array("content-type","bcc:","to:","cc:","href");
              return str_replace($bad,"",$string);
            }
         
        
            $email_message .= "Email: ".clean_string($email_to)."\n";
            $email_message .= "Nouveau mot de passse : PasswordMautoRS \n\n";
            $email_message .= "Veillez Le changer au plus vite \n";

        
        
         
        // create email headers
        $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail($email_to, $email_subject, $email_message, $headers);

  header('Location: Connexion.php');
  exit();
}

?>

<!DOCTYPE html>
<html>
<!--------php--------->
<?php
include 'head.php';
include 'menu.php';
?>


<div class="login-dark">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-gear-outline"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div><a class="forgot" href="Connexion.php">Return to login</a></form>
</div>


<?php
include 'footer.php';
include 'script.php';
?>
</body>

</html>