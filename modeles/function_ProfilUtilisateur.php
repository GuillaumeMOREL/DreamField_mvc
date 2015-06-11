<?php
require_once('controleurs/database_connect.php');

function getuser($bdd, $getid) {

       $requser = $bdd-> prepare('SELECT * FROM utilisateurs WHERE I_D = ?');
       $requser->execute(array($getid));
       $userinfo = $requser->fetch();
       return $userinfo;
       }


/*function getAnnonceParId($bdd, $id){
 $req = $bdd-> prepare("SELECT * FROM annonces WHERE 'id_vendeur'= ? ");
	      $req->execute(array($id));
	      $Annonce = $req->fetchArray();
	      return $Annonce;
	  }*/

function getAnnonceParId($bdd, $getid){
 $req = $bdd-> prepare("SELECT * FROM annonces, utilisateurs WHERE id_vendeur = I_D AND I_D = ?");
	      $req->execute(array( $getid));
	      $ann = $req->fetchAll();
	      return $ann;
}
function getAllUsers($bdd) {
 $requser = $bdd-> prepare('SELECT * FROM utilisateurs');
       $requser->execute(array());
       //$user = $requser->fetch();
       return $requser;
       }
function suppUsers($bdd, $id){
$requser = $bdd-> prepare('DELETE FROM utilisateurs WHERE I_D=?');
       $requser->execute(array($id));
}

function getusername($bdd, $getnom) {

       $requser = $bdd-> prepare('SELECT * FROM utilisateurs WHERE nom= ?');
       $requser->execute(array($getnom));
       //$userinfo = $requser->fetch();
       return $requser;
       }
function getuserprenom($bdd, $getprenom) {

       $requser = $bdd-> prepare('SELECT * FROM utilisateurs WHERE prenom= ?');
       $requser->execute(array($getprenom));
       $userinfo = $requser->fetch();
       return $userinfo;
       }
?>

