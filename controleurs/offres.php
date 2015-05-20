<?php
require('modeles/fruits.php');

$fruits = getFruits($bdd);




//require('modeles/legumes.php'); 
$legumes = getLegumes($bdd);

require('vues/offres.php');
/*require('vues/offres.php'); */

?>