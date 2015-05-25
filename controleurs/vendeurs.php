<?php
require('modeles/vendeurs.php');

$DepartementVendeur = getVendeursParDepartements($bdd);

$IdVendeur = getIdVendeurs($bdd);

$PhotoProduitVendeur = getImageProduitEnVente($bdd);

require('vues/vendeurs.php');

?>