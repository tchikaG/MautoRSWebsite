<!DOCTYPE html>
<html>


<?php
include 'head.php';
include 'menu.php';
?>



<body>
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/DSC_4097a00085.JPG" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/DSC_4101a00086.JPG" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/DSC_4119a00091.JPG" alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
    </div>
    <div data-bs-parallax-bg="true" style="height: 300px;background-image: url(assets/img/star-sky.jpg);background-position: center;background-size: cover;"></div>
    <div class="container">
        <h1 style="margin-bottom: 0px;">Nos Videos</h1>
    </div>
    <div class="video-container"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/2siDcLRvTbI"></iframe></div>
    <div data-bs-parallax-bg="true" style="height: 300px;background-image: url(assets/img/star-sky.jpg);background-position: center;background-size: cover;"></div>
    <section class="py-5">
        <div class="container">
            <h1 class="text-center" style="font-family: Cabin, sans-serif;">Nos PHotos</h1>
            <p class="text-center" style="color: rgb(0,0,0);">Vous pouvez les voirs aussi sur notre <a href="https://www.instagram.com/mautors_/">instagram</a>&nbsp;</p>
        </div>

        <link rel="stylesheet" href="./assets/css/Instafeed-Link-Version-2.css">

          <!--- import Instagram --->
    <section class="py-5">
        <div class="container">
            <div class="row d-flex align-items-center mt-3" id="instafeed"></div>
        </div>

        <!--- import JS --->
        <script src="assets/js/jquery.min.js"></script>
        <script src="./assets/js/Instafeed-Link-Version-2-1.js"></script>
        <script src="./assets/js/Instafeed-Link-Version-2.js"></script>
    </section>
    <!--- <div class='sk-instagram-feed' data-embed-id='39734'></div><script src='https://www.sociablekit.com/app/embed/instagram-feed/widget.js' async defer></script> --->



<div id="instagram-feed1" class="instagram_feed"></div>

    </section>
    </div><a class="cd-top js-cd-top cd-top--fade-out cd-top--show" style="background-image: url(&quot;assets/img/cd-top-arrow.svg&quot;);background-color: rgba(118,118,118,0.8);background-repeat: no-repeat;" href="#0">Top</a>

</body>
<!---------------php-------------->
<?php
include 'footer.php';
include 'script.php';
?>
</html>
