$(document).ready(function() {

//import du compte et du nombre d'images
 var userFeed = new Instafeed({
        get: 'user',
        userId: '6218936924',
        limit: 9,
        resolution: 'standard_resolution',
        accessToken: '6218936924.e3139ee.def66914ebea4483bf301d0815266070',
        sortBy: 'most-recent',
        template: '<div class="col-lg-4 col-6 instaimg squareLook"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();


    // Cela va créer une seule galerie à partir de tous les éléments qui ont la classe "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});
