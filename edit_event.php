<!DOCTYPE html>
<html>

<!-----------php---------->
<?php
include 'head.php';
include 'menu.php';

if(!empty($_POST['nom']) && !empty($_POST['ride']) && !empty($_POST['comment']))
 {
     // connexion à la base de données
     $db_username = 'mautorsadmin';
     $db_password = 'mautorspassword';
     $db_name     = 'mautorsdb';
     $db_host     = 'localhost';
     $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
            or die('could not connect to database');

     // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
     // pour éliminer toute attaque de type injection SQL et XSS
    $nom = mysqli_real_escape_string($db,htmlspecialchars($_POST['nom']));
    $ride = mysqli_real_escape_string($db,htmlspecialchars($_POST['ride']));
    $comment = mysqli_real_escape_string($db,htmlspecialchars($_POST['comment']));
    $date_debut = mysqli_real_escape_string($db,htmlspecialchars($_POST['date_debut']));
    $date_fin = mysqli_real_escape_string($db,htmlspecialchars($_POST['date_fin']));


 	  //$surname = mysqli_real_escape_string($db,htmlspecialchars($_POST['surname'])); 

    $requete = "INSERT INTO T_Event (nom, ride, comment, date_debut, date_fin) VALUES ('".$nom."', '".$ride."', '".$comment."', '".$date_debut."', '".$date_fin."');";
    $exec_requete = mysqli_query($db,$requete);
    $reponse      = mysqli_fetch_array($exec_requete);

    $requete2 = "SELECT * FROM T_Event WHERE nom = 'Le premier';";
    $execute_req = mysqli_query($db,$requete);
    $data      = mysqli_fetch_assoc($execute_req);

   echo '<meta http-equiv="refresh" content="0;url=event.php">'; 
 }
 else
 {

 }

?>

<body>
    <div>
        <div class="container-fluid" style="background-image: url(&quot;assets/img/star-sky.jpg&quot;);height: 1079px;">
            <h1 style="padding-top: 162px;color: rgb(255,255,255);">Add Event</h1>
            <hr>
            <form method="POST">
                <input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden"
                    name="to" value="email@awebsite.com">
                <div class="form-row">
                    <div class="col-md-6">
                        <div id="successfail"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-md-6" id="message" style="margin-left: 475px;margin-right: 475px;">
                        <h2 class="h4" style="color: rgb(255,255,255);"><i class="fa fa-plus"></i> Add Event<small><small class="required-input">&nbsp;(*required)</small></small>
                        </h2>
                        <div class="form-group"><label for="nom" style="color: rgb(255,255,255);">Name of Event</label><span class="required-input">*</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-commenting-o"></i></span></div><input class="form-control" type="text" id="nom" name="nom" required="" placeholder="Full Name"></div>
                        </div>
                        <div class="form-group"><label for="ride" style="color: rgb(255,255,255);">Ride</label><span class="required-input">*</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-road"></i></span></div><input class="form-control" type="text" id="ride" name="ride" required="" placeholder="Ride (lausanne -> vevey)"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <div class="form-group"><label for="from-phone" style="color: rgb(255,255,255);">Date Debut</label><span class="required-input">*</span>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar-times-o"></i></span></div><input class="form-control" type="text" id="date_debut" name="date_debut" required="" placeholder="date debut"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <div class="form-group"><label for="from-phone" style="color: rgb(255,255,255);">Date Fin</label><span class="required-input">*</span>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar-times-o"></i></span></div><input class="form-control" type="text" id="date_fin" name="date_fin" required="" placeholder="date fin"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label for="comment" style="color: rgb(255,255,255);">Comments</label><textarea class="form-control" id="comment" name="comment" placeholder="Enter Comments" rows="5"></textarea></div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                            </div>
                        </div>
                        <hr class="d-flex d-md-none">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <form id="contactForm" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control"
                                type="hidden" name="to" value="email@awebsite.com">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div id="successfail"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6" id="message">
                                    <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small>
                                    </h2>
                                    <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" id="from-name" name="name" required="" placeholder="Full Name"></div>
                                    </div>
                                    <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" id="from-email" name="email" required="" placeholder="Email Address"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                            <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" id="from-phone" name="phone" required="" placeholder="Primary Phone"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                            <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" id="from-calltime" name="call time"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" id="from-comments" name="comments" placeholder="Enter Comments" rows="5"></textarea></div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                            <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                        </div>
                                    </div>
                                    <hr class="d-flex d-md-none">
                                </div>
                                <div class="col-12 col-md-6">
                                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                    <div class="form-row">
                                        <div class="col-12">
                                            <div class="static-map"><a rel="noopener" href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292"
                                                    target="_blank"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                        </div>
                                        <div class="col-sm-6 col-md-12 col-lg-6">
                                            <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                            <div><span><strong>Name</strong></span></div>
                                            <div><span>email@awebsite.com</span></div>
                                            <div><span>www.awebsite.com</span></div>
                                            <hr class="d-sm-none d-md-block d-lg-none">
                                        </div>
                                        <div class="col-sm-6 col-md-12 col-lg-6">
                                            <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                            <div><span><strong>Office Name</strong></span></div>
                                            <div><span>55 Icannot Dr</span></div>
                                            <div><span>Daytone Beach, FL 85150</span></div>
                                            <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                            <hr class="d-sm-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include 'footer.php';
include 'script.php';
?>
</body>

</html>