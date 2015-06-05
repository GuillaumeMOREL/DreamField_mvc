<?php
require_once('controleurs/database_connect.php');

function getsession($bdd,$_SESSION['id']){
 $req= $bdd-> prepare('SELECT * FROM utilisateurs WHERE I_D= ?');
  $req->execute(array($_SESSION['id']));
  $result = $req->fetch();
  return $result;
}

function registerdonnees($newadresse, $newnumero_departement, $newmail, $newtel, $_SESSION['id']){
	 $insert = $bdd-> prepare('UPDATE utilisateurs SET adresse= ?, numero_departement= ?, mail= ?, tel= ? WHERE I_D = ?');
      $insert->execute(array($newadresse, $newnumero_departement, $newmail, $newtel, $_SESSION['id']));
      return $insert;
      } 

function registerpsw($newpass, $_SESSION['id']){
	  $insertpass = $bdd-> prepare('UPDATE utilisateurs SET pass= ? WHERE I_D = ?');
      $insertpass->execute(array($newpass, $_SESSION['id']));
      return $insert;
      } 

function envoiavatar($_SESSION['id'].".".$extensionUpload, $_SESSION['id']){
	  $updateavatar = $bdd->prepare('UPDATE utilisateurs SET photo_profil = :photo_profil WHERE I_D = :I_D');
      $updateavatar->execute(array('photo_profil' => $_SESSION['id'].".".$extensionUpload, 'I_D' => $_SESSION['id']));
      return $updateavatar;
      } 

function envoiavatar($_SESSION['id'].".".$extensionUpload, $_SESSION['id']){
	  $updateavatar = $bdd->prepare('UPDATE utilisateurs SET photo_profil = :photo_profil WHERE I_D = :I_D');
      $updateavatar->execute(array('photo_profil' => $_SESSION['id'].".".$extensionUpload, 'I_D' => $_SESSION['id']));
      return $updateavatar;

 ?>