<?php

require('modeles/function_offres.php');

$fruit = getFruits($bdd);

$legume = getLegumes($bdd);

//if(isset($_SESSION['I_D'])){

if(isset($_POST['validerDepot'])) {

    $nom_produit = htmlspecialchars($_POST['nom_produit']);
    $ProduitAutre = htmlspecialchars($_POST['ProduitAutre']);
    $nbPoidsQuant = htmlspecialchars($_POST['nbPoidsQuant']);
    $PoidsQuant = htmlspecialchars($_POST['PoidsQuant']);
    $dateexpiration = htmlspecialchars($_POST['dateexpiration']);
    $remarque = htmlspecialchars($_POST['remarque']);
    $prix = htmlspecialchars($_POST['prix']);
    $troc = htmlspecialchars($_POST['troc']);
    $iduser = $_SESSION['id'];
    $dep = getRegionUser($bdd,$iduser);

     $InfosAnnonces = registerDeposerAnnonces($bdd,  $nom_produit, $ProduitAutre, $nbPoidsQuant, $PoidsQuant, $dateexpiration, $remarque, $prix, $troc, $iduser, $dep['numero_departement']);
                           
 header('Location: index.php?page=ProfilUtilisateur&id='.$_SESSION['id']);
    }
 
require('vues/deposerAnnonce.php');
