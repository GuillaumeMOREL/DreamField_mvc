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
    $req = $bdd->query("SELECT nom_departement FROM carte_de_france  ORDER BY nom_departement");
    return $req;
} 
function getRegionUser($bdd, $iduser){
    $req = $bdd->prepare("SELECT numero_departement FROM utilisateurs WHERE I_D = ?");
    $req->execute(array($iduser));
    $dn = $req->fetch();
    return $dn; 
}

 
function registerDeposerAnnonces($bdd, $nom_produit, $ProduitAutre, $nbPoidsQuant, $PoidsQuant, $dateexpiration, $remarque, $prix, $troc, $iduser, $dep){
    $req = $bdd->prepare('INSERT INTO annonces(nom_produit, ProduitAutre, nbPoidsQuant, PoidsQuant, dateexpiration, remarque, prix, troc, id_vendeur, departement_annonce, date_annonce) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())');
    $req->execute(array($nom_produit, $ProduitAutre, $nbPoidsQuant, $PoidsQuant, $dateexpiration, $remarque, $prix, $troc, $iduser, $dep));

}
/*
function recupererInfoUserVersAnnonce($bdd){
    $req = $bdd->prepare('INSERT INTO `annonces` (`id_annonce`, `departement_annonce` SELECT `I_D`, `numero_departement` FROM utilisateurs) VALUES (?,?)');
    $req->execute(array($id_annonce, $departement_annonce));
}
*/
?>