<!DOCTYPE html>
<html>
<!-------------php---------->
<?php
include 'head.php';
?>
<body>
    <div class="parallax">
        <div class="container d-flex justify-content-center align-items-center parallax-content" style="height:100vh;">
            <div class="col-12 col-md-10 col-lg-8 d-flex justify-content-center flex-column">
                <h1 style="font-family: Cabin, sans-serif;font-size: 116px;">Mautors</h1>
                <p style="font-family: Cabin, sans-serif;">en savoir plus</p>
            </div>
        </div><video class="parallax-background" autoplay="" loop="" muted=""><source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4" wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':25}},{'type':'text','name':'video_css','label':'Video CSS (eg. filters)','wrapper':{'width':25}}]" wp-attr="[{'target':'src','replace':'%1'},{'target':'parent_style','replace':'%2'}]"></video>
        <div
            class="parallax-placeholder" style="background-image:url(&quot;assets/img/placeholder.jpg&quot;);"></div>
    </div>
    <div class="features-clean">
        <div class="container" style="padding-top: 50px;padding-bottom: 50px;">
            <div class="intro">
                <p class="text-center" style="font-size: 23px;width: 550px;">Notre entreprise a pour principe de crée des roadtrips avec un tracé, de la bonne humeurs, des voitures et de la passion.</p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">OÙ ?</h3>
                    <p class="description">Principalement en suisse et en europe. De temps en temps dans le monde.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Combien de temps ?</h3>
                    <p class="description">1 à 2 semaines voir 3 semaines.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name">Catégorie</h3>
                    <p class="description">certain véhicule serons pas autorisé, comme les camions, motos, ...</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-leaf icon"></i>
                    <h3 class="name">Ecologie</h3>
                    <p class="description">Nous faisons attention à notre plannet donc nous fersons une partie de nos bénéfice à des associations pour plasnter des abres.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-plane icon"></i>
                    <h3 class="name">Long voyage</h3>
                    <p class="description">Pour de nombreuse raison nous ne ferons jamais de voyage en avions avec vos voitures.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Annulation tardive</h3>
                    <p class="description">Toutes annulation après la date dite, serons non rembourcé.</p>
                </div>
            </div>
        </div>
    </div>
    <a class="cd-top js-cd-top cd-top--fade-out cd-top--show" style="background-image: url(&quot;assets/img/cd-top-arrow.svg&quot;);background-color: rgba(118,118,118,0.8);background-repeat: no-repeat;" href="#0">Top</a>
    <!----------php----------->
<?php
include 'footer.php';
include 'menu.php';
include 'script.php';
?>
</body>

</html>