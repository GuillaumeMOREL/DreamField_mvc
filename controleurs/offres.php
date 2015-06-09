<?php
require('modeles/function_offres.php');

$fruits = getFruits($bdd);


$legumes = getLegumes($bdd);

$region = getRegion($bdd);

require('vues/offres.php');
/*require('vues/offres.php'); */

?>