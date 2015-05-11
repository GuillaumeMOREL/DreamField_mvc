<?php

$mailOK = false;  // cf Astuce

// On n'effectue les traitement qu'à la condition que
// les informations aient été effectivement postées
if (empty($_POST['mail']) AND empty($_POST['pass'])) {

  header ('location : connexion.php?error=pas_rempli') ; // je vous renvoie à la doc de cette fonction
}
  // On va chercher le mot de passe afférent à ce mail
$req= $bdd-> prepare('SELECT mail,pass AS nbre_mail AS nbre_pass FROM utulisateurs WHERE mail= ? AND pass= ?');
      $req->execute(array($_POST['mail']), ($_POST['pass']));
      $result = $req->fetch();
 
  /*$sql = "SELECT mail, pass FROM utulisateurs WHERE mail = '".addslashes($mail)."'";
  $bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', '');*/
 
  // On vérifie que l'utilisateur existe bien
  if ($result['nbre_mail'] >0 AND $result['nbre_pass'] > 0) {
    header('Location : connexion.php?error=existe');
   }
   else{
    echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";
   }
    // On vérifie que son mot de passe est correct
    /*if ($pass == $data['pass']) {
      $mailOK = true;
    }
  }
}

// Si le login a été validé on met les données en sessions
if ($mailOK) {
  $_SESSION['mail'] = $data['mail'];
}
else {
  echo 'Une erreur est survenue, veuillez réessayer !';
*/
?>