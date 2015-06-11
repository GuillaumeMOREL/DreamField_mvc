<?php 
require("modeles/function_offres.php");
require("modeles/function_ProfilUtilisateur.php");


$annonces=getAllAnnonces($bdd);

if (isset($_POST['formrempli'])) 
{
	$suppr=suppUsers($bdd, $_POST['id']);
}
$users=getAllUsers($bdd);
require ("vues/BOindex.php");
?>





