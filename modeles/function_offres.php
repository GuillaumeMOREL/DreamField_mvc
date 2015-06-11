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

function getVendeurParDepartement($bdd, $dep){
 $req = $bdd-> prepare("SELECT * FROM annonces, utilisateurs WHERE id_vendeur = I_D AND departement_annonce = ?");
          $req->execute(array($dep));
          $dn = $req->fetchAll();
          return $dn;
}
function getAllAnnonces($bdd){
 $req = $bdd-> prepare("SELECT * FROM annonces, utilisateurs WHERE id_vendeur = I_D ORDER BY prix");
          $req->execute(array());
          $ann = $req->fetchAll();
          return $ann;
          }

function getVendeurParDepartementEtNomProduit($bdd, $dep, $produit){
 $req = $bdd-> prepare("SELECT * FROM annonces, utilisateurs WHERE departement_annonce = ? AND nom_produit = ?");
          $req->execute(array($dep, $produit));
          $dn = $req->fetchAll();
          return $dn;
}
function suppAnnonce($bdd, $id){
$reqannonce = $bdd-> prepare('DELETE FROM annonces WHERE id_annonce=?');
       $reqannonce->execute(array($id));
}

//function getAnnoncesTriees ($bdd, $dep, )
?>