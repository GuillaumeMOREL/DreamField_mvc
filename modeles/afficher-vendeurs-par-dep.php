<?php

function getVendeursParDepartements($bdd){
	$req = $bdd->query("SELECT prenom, nom FROM utilisateurs")
	return req;
}

function getIdVendeurs($bdd){
	$req = $bdd->query("SELECT id_annonce FROM annonces, utilisateurs WHERE nom_vendeurs = nom AND prenom_vendeurs = prenom ")
	return req;

}
function getImageProduitEnVente($bdd){
	$req = $bdd->query("SELECT photo_offre FROM annonces, utilisateurs WHERE  nom_vendeurs = nom AND prenom_vendeurs = prenom ")
	return req;

}