<?php
require_once('controleurs/database_connect.php');

function getsession($bdd){
 $req= $bdd-> prepare('SELECT * FROM annonces, utilisateurs WHERE id_vendeur = I_D AND I_D = ?');
  $req->execute(array($_SESSION['id']));
  $result = $req->fetch();
  return $result;
}

function registerdonnees($newnbPoidsQuant, $newPoidsQuant, $newremarque, $newprix, $newtroc){
	 $insert = $bdd-> prepare('UPDATE annonces SET nbPoidsQuant= ?, PoidsQuant= ?, remarque= ?, prix= ?, troc= ? WHERE I_D = ?');
      $insert->execute(array($newnbPoidsQuant, $newPoidsQuant, $newremarque, $newprix, $newtroc, $_SESSION['id']));
      return $insert;
      } 


/*
function registerpsw($newpass){
	  $insertpass = $bdd-> prepare('UPDATE utilisateurs SET pass= ? WHERE I_D = ?');
      $insertpass->execute(array($newpass, $_SESSION['id']));
      return $insert;
      } 

function envoiavatar( ){
	  $updateavatar = $bdd->prepare('UPDATE utilisateurs SET photo_profil = :photo_profil WHERE I_D = :I_D');
      $updateavatar->execute(array('photo_profil' => $_SESSION['id'].".".$extensionUpload, 'I_D' => $_SESSION['id']));
      return $updateavatar;
      } */
 ?>