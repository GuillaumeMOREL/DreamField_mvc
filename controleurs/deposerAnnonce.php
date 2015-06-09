<?php

require('modeles/function_offres.php');

$fruit = getFruits($bdd);

$legume = getLegumes($bdd);

if(isset($_POST['validerDepot'])) {

    $nom_produit = htmlspecialchars($_POST['nom_produit']);
    $ProduitAutre = htmlspecialchars($_POST['ProduitAutre']);
    $nbPoidsQuant = htmlspecialchars($_POST['nbPoidsQuant']);
    $PoidsQuant = htmlspecialchars($_POST['PoidsQuant']);
    $dateexpiration = htmlspecialchars($_POST['dateexpiration']);
    $remarque = htmlspecialchars($_POST['remarque']);
    $prix = htmlspecialchars($_POST['prix']);
    $troc = htmlspecialchars($_POST['troc']);

                              $InfosAnnonces = registerDeposerAnnonces($bdd, $nom_produit, $ProduitAutre, $nbPoidsQuant, $PoidsQuant, $dateexpiration, $remarque, $prix, $troc);
                               //header('Location: index.php?page=ProfilUtilisateur&mess=votre annonce été bien enregistrées.');
                            }
  /*    }else{
        header('Location: index.php?page=deposerAnnonce&mess=Choississez un produit dans autres ou un fruit / legume !.');
      }            
}
*/
require('vues/DeposerAnnonce.php');
?>