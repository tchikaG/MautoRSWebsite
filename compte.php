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
                                    <div class="form-group"><label style="color: rgb(255,255,255);">Firstname </label><input class="form-control" type="text" name="firstname" required=""></div>
                                    <div class="form-group"><label style="color: rgb(255,255,255);">Address</label><input class="form-control" type="text" name="firstname" required=""></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><label style="color: rgb(255,255,255);">Lastname </label><input class="form-control" type="text" name="lastname" required=""></div>
                                    <div class="form-group"><label style="color: rgb(255,255,255);">Location</label><input class="form-control" type="text" name="lastname" required=""></div>
                                </div>
                            </div>
                            <div class="form-group"><label style="color: rgb(255,255,255);">Phone</label><input class="form-control" type="tel" required=""></div>
                            <div class="form-group"><label style="color: rgb(255,255,255);">Email </label><input class="form-control" type="email" required=""></div>
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