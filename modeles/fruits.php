<?php

function getFruits($bdd){
	$req = $bdd->query("SELECT nom_produit, chemin_photo FROM categorie WHERE categorie_produit = 'fruit' ORDER BY nom_produit");
	return $req;
}

function getLegumes($bdd){
	$req = $bdd->query("SELECT nom_produit, chemin_photo FROM categorie WHERE categorie_produit = 'legume' ORDER BY nom_produit");
	return $req;
}
function getRegion($bdd){
	$req = $bdd->query("SELECT region FROM carte_de_france  ORDER BY region");
	return $req;
}



?>