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

function registerDeposerAnnonces($bdd, $nom_produit, $ProduitAutre, $nbPoidsQuant, $PoidsQuant, $dateexpiration, $remarque, $prix, $troc){
	$req = $bdd->prepare('INSERT INTO `DREAMFIELD`.`annonces` (`nom_produit`, `ProduitAutre`, `nbPoidsQuant`, `prix`, `dateexpiration`, `PoidsQuant`,  `remarque`,  `troc`, `date_DeposerAnnonce`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())');
    $req->execute(array($nom_produit, $ProduitAutre, $nbPoidsQuant, $prix, $dateexpiration, $PoidsQuant,  $remarque,  $troc));
}

?>