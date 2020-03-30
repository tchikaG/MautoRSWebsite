<?php
session_start();
$db_username = 'mautorsadmin';
$db_password = 'mautorspassword';
$db_name     = 'mautorsdb';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');
$email = $_SESSION['email'];

$filename=basename($_FILES['imgfile']['name']);
$requete1 = "UPDATE T_Utilisateur SET picture='$filename' WHERE email like $email";
$resultat1 = $db->query($requete1);
$ligne = $resultat1->fetch_assoc();

$path = "img/avatar/";                       //path to which images are to be uploaded

$path = $path . basename($_FILES['imgfile']['name']); //create complete 
                                                                            //upload path


if(move_uploaded_file($_FILES['imgfile']['tmp_name'], $path)) //upload file
{
echo "The file has been uploaded";
} 

else							//if an error occurred
{
echo "There was an error uploading the file, please try again!";
}			
?>