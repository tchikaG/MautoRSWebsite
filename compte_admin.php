<?php
include 'head.php';
include 'menu.php';
?>
<div class="row" style="background-image: url(&quot;assets/img/star-sky.jpg&quot;);">
        <div class="col">
            <div class="container profile profile-view" id="profile" style="margin-top: 237px;background-color: rgba(47,47,47,0.69);margin-bottom: 46px;">
                <form>
                    <div class="form-row profile-row">
                        <div class="col-md-4 relative">
                            <div class="avatar">
                                <div class="avatar-bg center"></div>
                            </div><input type="file" class="form-control" name="avatar-file"><button class="btn btn-primary" type="button" style="padding: 12px;margin: 42px;padding-right: 30px;padding-left: 30px;margin-left: 10px;">Add event</button>
                            <button
                                class="btn btn-primary" type="button" style="padding: 12px;padding-right: 30px;padding-left: 30px;margin-left: 15px;margin-right: 10px;">Edit event</button><button class="btn btn-primary" type="button" style="padding: 12px;margin: 42px;padding-right: 20px;padding-left: 22px;margin-left: 14px;margin-right: 35px;">Add to shop</button><button class="btn btn-primary"
                                    type="button" style="padding: 12px;padding-right: 35px;padding-left: 35px;margin-left: 16px;margin-right: 10px;">Edit shop</button><button class="btn btn-primary" type="button" style="padding: 12px;margin: 42px;padding-right: 20px;padding-left: 22px;margin-left: 10px;">Block accunt</button>
                                <button
                                    class="btn btn-primary" type="button" style="padding: 9px;padding-right: 35px;padding-left: 35px;margin-left: 9px;margin-right: 10px;">Block IP</button><button class="btn btn-primary" type="button" style="padding: 12px;margin: 42px;padding-right: 24px;padding-left: 22px;margin-left: 29px;">orders</button><button class="btn btn-primary" type="button" style="padding: 12px;padding-right: 35px;padding-left: 35px;margin-left: 16px;margin-right: 10px;">infos accunt</button></div>
                        <div
                            class="col-md-8">
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