<?php
require('modeles/vendeurs.php');

$vendeurs = getVendeursParDepartements($bdd);


require('vues/vendeurs.php');

?>