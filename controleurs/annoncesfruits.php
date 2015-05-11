<?php
require('modeles/fruits.php');

$fruits = afficherFruitsLegumes($bdd);

require('vues/annoncesfruits.php');