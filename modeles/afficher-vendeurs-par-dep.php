<?php
/*
require_once("controleurs/database_connect.php");
function getVendeurParDepartement($bdd, $dep){
	$req = $bdd->query("SELECT * FROM annonces INNER JOIN utilisateurs ON 'annonces.id_annonce'' = utilisateurs.I_D' WHERE departement_annonce = ".$dep." ");
	return $req->fetchAll();
}*/

function getVendeurParDepartement($bdd, $dep){
 $req = $bdd-> prepare("SELECT * FROM annonces, utilisateurs WHERE id_vendeur = I_D AND departement_annonce = ?");
	      $req->execute(array($dep));
	      $dn = $req->fetchAll();
	      return $dn;
}

?>