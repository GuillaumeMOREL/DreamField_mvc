<?php 
require("modeles/function_ProfilUtilisateur.php");
require("modeles/function_offres.php");
if (isset($_POST['categorie']) and $_POST['categorie']=="users") 
{
$name=getusername($bdd,$_POST['saisie']); 
}
else
{
$annonces=getAnnonceParNomProduit($bdd, $_POST['saisie']);
}
require("vues/search.php");
?>