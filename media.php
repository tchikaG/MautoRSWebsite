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

        

        <script src="jquery.instagramFeed.min.js"></script>
    <script>
        (function($){
            $(window).on('load', function(){
                $.instagramFeed({
                    'username': 'instagram',
                    'container': "#instagram-feed1",
                    'display_profile': true,
                    'display_biography': true,
                    'display_gallery': true,
                    'callback': null,
                    'styling': true,
                    'items': 8,
                    'items_per_row': 4,
                    'margin': 1
                }); 
                
                $.instagramFeed({
                    'username': 'github',
                    'container': "#instagram-feed2",
                    'display_profile': false,
                    'display_biography': false,
                    'display_gallery': true,
                    'callback': null,
                    'styling': true,
                    'items': 8,
                    'items_per_row': 4,
                    'margin': 1
                });
                $.instagramFeed({
                    'username': 'zara',
                    'container': "#instagram-feed3",
                    'display_profile': false,
                    'display_biography': false,
                    'display_gallery': true,
                    'callback': null,
                    'styling': true,
                    'items': 12,
                    'items_per_row': 6,
                    'margin': 0.25
                });
                $.instagramFeed({
                    'tag': 'paradise',
                    'container': "#instagram-feed4",
                    'display_profile': true,
                    'display_gallery': true,
                    'items': 100,
                    'items_per_row': 5,
                    'margin': 0.5
                });
                $.instagramFeed({
                    'username': 'fcbarcelona',
                    'container': "#instagram-feed5",
                    'display_profile': false,
                    'display_biography': false,
                    'display_gallery': false,
                    'display_igtv': true,
                    'callback': null,
                    'styling': true,
                    'items': 8,
                    'items_per_row': 4,
                    'margin': 1
                });
                
                //example 7
                $.instagramFeed({
                    'username': 'instagram',
                    'get_data': true,
                    'callback': function(data){
                        $('#jsonHere').html(JSON.stringify(data, null, 2));
                    }
                });
                
                // Show back to top button if distance from top > 0
                $(window).scroll(function(){ 
                    var viewportTop = $(window).scrollTop() + $(window).height();
             
                    if($(window).scrollTop() > 10){
                        $('#btn-top').addClass('d-block');
                        $('#btn-top').removeClass('d-none');
                    }else{
                        $('#btn-top').addClass('d-none');
                        $('#btn-top').removeClass('d-block');
                    }
                });

            });
        })(jQuery);
    </script>



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