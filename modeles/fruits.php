<?php

function getFruits($bdd){
	$req = $bdd->query("SELECT nom_produit, chemin_photo FROM categorie WHERE categorie_produit = 'fruit' ORDER BY nom_produit");
	return $req;
}

function getLegumes($bdd){
	$req = $bdd->query("SELECT nom_produit, chemin_photo FROM categorie WHERE categorie_produit = 'legume' ORDER BY nom_produit");
	
	return $req;
}

?>