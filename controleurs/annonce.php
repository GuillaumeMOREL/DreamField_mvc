<?php
//require('modeles/afficher-vendeurs-par-dep.php');

/*$annonce = getInfoAnnonce($bdd); */
$id = htmlspecialchars($_GET['id']);
$dn = getVendeurParDepartement($bdd,$id);
var_dump($dn);

require('vues/vendeurs.php');

?>