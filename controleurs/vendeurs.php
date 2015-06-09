<?php
require('modeles/afficher-vendeurs-par-dep.php');

if (isset($_GET['id'])) {
$dep = htmlspecialchars($_GET['id']);

$dn = getVendeurParDepartement($bdd,$dep);
}


require('vues/vendeurs.php');

?>