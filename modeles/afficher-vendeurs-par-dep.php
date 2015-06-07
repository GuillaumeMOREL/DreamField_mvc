<?php

require_once("controleurs/database_connect.php");
function getVendeurParDepartement($bdd, $dep){
	$req = $bdd->query("SELECT * FROM annonces INNER JOIN utilisateurs ON 'annonces.id_annonce'' = utilisateurs.I_D' WHERE departement_annonce = ".$dep." ");
	return $req->fetchAll();
}


?>