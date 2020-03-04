<?php
$db_username = 'mautorsadmin';
$db_password = 'mautorspassword';
$db_name     = 'mautorsdb';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');
$requete = "SELECT * FROM T_Event";
$resultat = $db->query($requete);
mysqli_fetch_all($resultat,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<!----------php---------->
<?php
include 'head.php';
include 'menu.php';
?>

<body>
<div data-bs-parallax-bg="true" style="height: 1000px;background-image: url(&quot;assets/img/star-sky.jpg&quot;);background-position: center;background-size: auto;padding-top: 300px;padding-bottom: 200px;">
        <div class="container">
            <h1 style="font-family: Cabin, sans-serif;padding-bottom: 10px;">Event</h1>
            <p class="text-center" style="font-size: 25px;font-family: Cabin, sans-serif;color: rgb(41,41,41);"><strong>Sign up for one of our roadtrips</strong></p>
        </div>
    </div>
    <div style="background-color: rgb(238,244,247);">
        <div class="container" style="padding-top: 50px;padding-bottom: 80px;"><button onclick="location.href = 'add.php';" class="btn btn-primary" type="button" style="margin-left: 1006px;margin-bottom: 28px;background-color: rgba(93,130,169,0.83);font-size: 25px;">ADD</button>
            <div class="row">
            <?php foreach ($resultat as $event): ?>
                    
                <div class="col-md-12" style="padding-top: 20px;padding-bottom: 20px;">
                    <div style="height: 130px;background-color: #ffffff;">
                        <div style="padding-left: 10px; padding-top: 10px;">
                        <id style="font-weight: bold; font-size:20px;"> <?= $event['nom'] ?> </id>
                        <br>
                        <id style="font-style: italic;"> <?= $event['ride'] ?> </id>
                        <br> <br> 
                        <?= $event['comment'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="footer-dark">
<!---------------php-------------->

</div><a class="cd-top js-cd-top cd-top--fade-out cd-top--show" style="background-image: url(&quot;assets/img/cd-top-arrow.svg&quot;);background-color: rgba(118,118,118,0.8);background-repeat: no-repeat;" href="#">Top</a>

</body>

</html>