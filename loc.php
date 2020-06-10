<?php
session_start();
$db_username = 'mautorsadmin';
$db_password = 'mautorspassword';
$db_name     = 'mautorsdb';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');
$requete = "SELECT * FROM T_Shop";
$resultat = $db->query($requete);
mysqli_fetch_all($resultat,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<?php

include ('head.php');
?>
<body>
<?php
include ('menu.php');

?>


<?php
$task = $_GET['task'];
if ($task == 'add')
{

    $id_p = $_GET['id_p'];
    $_SESSION['basket'][$id_p]++;
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

}
foreach ($_SESSION['basket'] as $pif){
    $count += $pif;
}
if($task == 'add')
{
    echo '<meta http-equiv="refresh" content="0; url=shop.php">';
}
?>


    <div data-bs-parallax-bg="true" style="height: 300px;background-image: url(assets/img/star-sky.jpg);background-position: center;background-size: cover;"></div>
    <div>  <a id="basket" href="pay.php" class="fa fa-shopping-basket float-right" style="font-size: 58px;margin-top: 90px;margin-right: 90px;margin-bottom: 50px;margin-left: 30px;color:black;">
    <span style="font-family:Arial, Helvetica, sans-serif; font-size:50px;"><?php echo $count; ?></span></a>
</div>

    <div class="container" style="height: 1500px;padding-top: 200px;width: 1200px;">
        <div class="row">
        <?php foreach ($resultat as $shop){ ?>
            <div class="col-md-6 col-lg-4">
                <div class="pricingTable" style="padding-bottom: 0px;">
                    <div class="pricingTable-header"><span class="icon"><img src="./shop/<?=$shop['Images']?>.png" style="width: 100%;height: 100%;margin-top: -80px;"></span>
                        <h1 class="title" style="background-color: rgb(84,149,247);"><?= $shop['nom'] ?></h1>
                        <div class="price-value"><span class="currency" style="margin: -30px;margin-top: -12px;">CHF</span><span><?= $shop['prix'] ?></span></div>
                    </div>
                    <div class="pricing-content">
                        <ul class="list-unstyled">
                            <li><strong><?= $shop['nombre'] ?></strong></li>
                        </ul><a class="pricingTable-signup" style="background-color: rgb(84,149,247);"   href="<?php echo "shop.php?task=add&id_p={$shop['id_product']}";?> ">Ajouter</a></div>
                </div>
            </div>
        <?php }?>
        </div>
    </div>






<?php
include 'footer.php';
include 'script.php';
?>

</body>
<!--
                <div class="col-md-6 col-lg-4">
                <div class="pricingTable" style="padding-bottom: 0px;">
                    <div class="pricingTable-header"><span class="icon"><img style="width: 134px;height: 133px;margin-top: -80px;"></span>
                        <h1 class="title" style="background-color: rgb(84,149,247);">sticker</h1>
                        <div class="price-value"><span class="currency" style="margin: -30px;margin-top: -12px;">CHF</span><span>99</span></div>
                    </div>
                    <div class="pricing-content">
                        <ul class="list-unstyled">
                            <li><strong>1 x </strong>sticker</li>
                        </ul><a class="pricingTable-signup" style="background-color: rgb(84,149,247);" href="#">Sign up</a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-0">
                <div class="pricingTable" style="padding-bottom: 0px;">
                    <div class="pricingTable-header"><span class="icon"><img style="width: 134px;height: 133px;margin-top: -80px;"></span>
                        <h1 class="title" style="background-color: rgb(84,149,247);">sticker</h1>
                        <div class="price-value"><span class="currency" style="margin: -30px;margin-top: -12px;">CHF</span><span>99</span></div>
                    </div>
                    <div class="pricing-content">
                        <ul class="list-unstyled">
                            <li><strong>1 x </strong>sticker</li>
                        </ul><a class="pricingTable-signup" style="background-color: rgb(84,149,247);" href="#">Sign up</a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="pricingTable" style="padding-bottom: 0px;">
                    <div class="pricingTable-header"><span class="icon"><img style="width: 134px;height: 133px;margin-top: -80px;"></span>
                        <h1 class="title" style="background-color: rgb(84,149,247);">sticker</h1>
                        <div class="price-value"><span class="currency" style="margin: -30px;margin-top: -12px;">CHF</span><span>99</span></div>
                    </div>
                    <div class="pricing-content">
                        <ul class="list-unstyled">
                            <li><strong>1 x </strong>sticker</li>
                        </ul><a class="pricingTable-signup" style="background-color: rgb(84,149,247);" href="#">Sign up</a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="pricingTable" style="padding-bottom: 0px;">
                    <div class="pricingTable-header"><span class="icon"><img style="width: 134px;height: 133px;margin-top: -80px;"></span>
                        <h1 class="title" style="background-color: rgb(84,149,247);">sticker</h1>
                        <div class="price-value"><span class="currency" style="margin: -30px;margin-top: -12px;">CHF</span><span>99</span></div>
                    </div>
                    <div class="pricing-content">
                        <ul class="list-unstyled">
                            <li><strong>1 x </strong>sticker</li>
                        </ul><a class="pricingTable-signup" style="background-color: rgb(84,149,247);" href="#">Sign up</a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-0">
                <div class="pricingTable" style="padding-bottom: 0px;">
                    <div class="pricingTable-header"><span class="icon"><img style="width: 134px;height: 133px;margin-top: -80px;"></span>
                        <h1 class="title" style="background-color: rgb(84,149,247);">sticker</h1>
                        <div class="price-value"><span class="currency" style="margin: -30px;margin-top: -12px;">CHF</span><span>99</span></div>
                    </div>
                    <div class="pricing-content">
                        <ul class="list-unstyled">
                            <li><strong>1 x </strong>sticker</li>
                        </ul><a class="pricingTable-signup" style="background-color: rgb(84,149,247);" href="#">Sign up</a></div>
                </div>
-->
</html>
