
<?php
session_start();
$db_username = 'mautorsadmin';
$db_password = 'mautorspassword';
$db_name     = 'mautorsdb';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');

if(!empty($_SESSION['caddie']))
{
// on extrait les id du caddie
$id_liste=implode(',',array_keys($_SESSION['caddie']));
}

// on fait notre requête
$req="SELECT id_product,nom,prix from t_shop where id IN(".$id_liste.")";
$res=$db->query($req);

// on boucle les infos retenues
while($data=$res->fetch_assoc())

{
// on clacule nos montants pour chaque article
$montant=$_SESSION['caddie'][$id]*$data['prix'];

// on affiche chaque ligne (avec une mise en page et du html bien sûr)
echo $data['nom'];
echo ' - ';
echo $_SESSION['caddie'][$id];
echo ' - ';
echo $data['prix'];
echo ' - ';
echo $montant;
echo '<br>';

// on additionne les montants pour notre total final
$total+=$montant;
}
echo 'Total du caddie : ',$total;
?>