<?php

function getFruitsLegumes($bdd){
	$req = $bdd->query("SELECT nom_produit, chemin_photo FROM categorie WHERE categorie_produit = 'fruit'");
	return $req;
}