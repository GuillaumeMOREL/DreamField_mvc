<?php
require('modeles/fruits.php');

$fruits = getFruitsLegumes($bdd);

require('vues/offres.php');