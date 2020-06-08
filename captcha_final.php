<!DOCTYPE html>
<html>
<body>
<!-- Captcha -->
<!--inside the form tag-->
<!--this custom_captcha id is used in js file,you can change in js and html both-->
<div id="custom_captcha">
  <?php

  if(!isset($_REQUEST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response']) )
  {

    $error = "Please fill the captcha.";
    //you can use this error var later to show error message on your page
  }
  else
  {


    $cresponse = urlencode($_REQUEST['g-recaptcha-response']);

    if($cresponse!=$_SESSION['custom_captcha'])
    {
     $error = "INVALID CAPTCHA";
     //you can use this var to show error invalid captcha
    }

  }

  //Now if no error then do your further process//
  if($errors=="")
  {
    //go ahed with form submission or data manipulation
  }

  ?>
</div>
<!--inside the form tag-->



</body>

</html>
