
<?php

/*
function getInfoAnnonce($bdd){
	$req = bdd->query("SELECT nom_vendeurs, prenom_vendeurs, id_annonce, categorie, prix, quantite, photo_offre, nom_produit FROM annonces ");
	return req;
}
*/
function getVendeurParDepartement($bdd, $dep){
	$req = $bdd->query("SELECT * FROM annonces WHERE departement_annonce = ".$dep." ");
	return $req;
}

/*
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

} */

?>