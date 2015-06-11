<?php 
require("modeles/function_offres.php");
require("modeles/function_ProfilUtilisateur.php");


if (isset($_POST['formrempli'])) 
{
	$suppr = suppUsers($bdd, $_POST['id']);
}
elseif(isset($_POST['formfull'])){
	$supp = suppAnnonces($bdd, $_POST['idann']);

}
$annonces = getAllAnnonces($bdd);
$users=getAllUsers($bdd);

require ("vues/BOindex.php");
?>





