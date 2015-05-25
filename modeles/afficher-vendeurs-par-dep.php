<?php

function getVendeursParDepartements($bdd){
	req = $bdd->query("SELECT prenom, nom FROM utilisateurs")
}

function getIdVendeurs($bdd){
	req = $bdd->query("SELECT id_annonce FROM annonces, utilisateurs WHERE nom_vendeurs = nom AND prenom_vendeurs = prenom ")
}