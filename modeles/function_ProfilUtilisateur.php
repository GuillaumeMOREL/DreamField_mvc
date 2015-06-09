<?php
require_once('controleurs/database_connect.php');

function getuser($bdd, $getid) {

       $requser = $bdd-> prepare('SELECT * FROM utilisateurs WHERE I_D = ?');
       $requser->execute(array($getid));
       $userinfo = $requser->fetch();
       return $userinfo;
       }


function getAnnonceParId($bdd, $id){
 $req = $bdd-> prepare("SELECT * FROM annonces WHERE 'id_vendeur'= ? ");
	      $req->execute(array($id));
	      $Annonce = $req->fetchArray();
	      return $Annonce;
	  }
?>

