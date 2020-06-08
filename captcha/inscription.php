<!DOCTYPE html>

<?php

error_reporting(E_ALL ^ E_NOTICE);
//Variable du nom du serveur
$servername_db = "localhost";
//Variable du nom d'user pour la base de données
$username_db = "root";
//Variable du mot de passe pour la base de données
$password_db = "root";
//Variable du nom de la base de données
$dbname = "speedtest";
//Variable pour le nom d'utilisateur
$username= htmlspecialchars($_POST['username']);
//Variable pour le prénom
$prenom= htmlspecialchars($_POST['prenom']);
//Variable pour le nom
$nom= htmlspecialchars($_POST['nom']);
//Variable du mail
$email= htmlspecialchars($_POST['email']);
//Variable pour le mot de passe
$password = md5($_POST['password']);
//Variable pour la confirmation de mot de passe
$repeatpassword = md5($_POST['repeatpassword']);
//On check si tous les champs sont rempli
  /*if($username&&$password&&$repeatpassword)
  {
// On check que les deux mot de passe soient identique
    if($password==$repeatpassword)
    {
      $id = '';

      // On crée la connexion à la base de données
      $conn = mysqli_connect($servername_db, $username_db, $password_db, $dbname);
      //On insère les valeurs dans la table de la base de données
      $sql = "INSERT INTO users (username, password, email, prenom, nom)
      VALUES ('$username', '$password', '$email', '$prenom', '$nom')";
      //Si les champs sont égal du php à la bd on mais un message comme quoi les entrées sont bien enregistrées
      if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Si les passwords ne sont pas identique affiché ce message
    }else echo'Les deux passwords doivent être identique';
  // Si tous les champs ne sont pas identique affiché ce message
  }*/
session_start();
  if(isset($_POST['captcha'])) {
    if($_POST['captcha'] == $_SESSION['captcha']) {
      if($username&&$password&&$repeatpassword)
    {
// On check que les deux mot de passe soient identique
      if($password==$repeatpassword)
      {
        $id = '';

        // On crée la connexion à la base de données
        $conn = mysqli_connect($servername_db, $username_db, $password_db, $dbname);
        //On insère les valeurs dans la table de la base de données
        $sql = "INSERT INTO users (username, password, email, prenom, nom)
        VALUES ('$username', '$password', '$email', '$prenom', '$nom')";
        //Si les champs sont égal du php à la bd on mais un message comme quoi les entrées sont bien enregistrées
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } 
      else 
        {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // Si les passwords ne sont pas identique affiché ce message
      }else echo'Les deux passwords doivent être identique';
  // Si tous les champs ne sont pas identique affiché ce message
  }
    } else {
      echo "Captchat marche pas :(";
    }
  }

?>

          <head>
              <meta charset="utf-8">
              <title>SpeedTest</title>
              <link rel="stylesheet" href="css/bootstrap.min.css">
              <link rel="stylesheet" href="css/inscription.css">
          </head>
          <body>
            <header class="container-fluid header">
              <div class="container">
                <a href="#" class="logo"> SpeedTest </a>
                <nav class="menu">
                  <a href="index.php"> Accueil </a>
                  <a href="#"> A propos </a>
                  <a href="login.php"> Login </a>
                  <a href="#"> Contact </a>
                </nav>
              </div>
            </header>
            <form method="POST">
              <div class="box">
                <h2>INSCRIPTION</h2>
                <h6>Nom d'ulisateur</h6>
                <input type="text" name='username'></br>
                <h6>Prénom</h6>
                <input type="text" name='prenom'></br>
                <h6>Nom</h6>
                <input type="text" name='nom'></br>
                <h6>Adresse électronique</h6>
                <input type="email" name='email'></br>
                <h6>Mot de passe</h6>
                <input type="password" name='password'></br>
                <h6>Confirmation</h6>
                <input type="password" name='repeatpassword'></br>
                <h6>captcha</h6>
                
                <img src="captcha.php" /> <br><br>
                <input type="text" name="captcha" id="myText"/><br>
                <button class="btn btn-custom" onclick="verify()" type='submit' value="S'inscrire" name='submit'> S'inscrire</button></br>
              </div>
            </form>
          </body>
    <footer class="container-fluid footer">
    </footer>

</html>
