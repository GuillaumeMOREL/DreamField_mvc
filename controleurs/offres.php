<?php
require('modeles/function_offres.php');

$fruits = getFruits($bdd);

$legumes = getLegumes($bdd);

$region = getRegion($bdd);



if(isset($_POST['formchoixdenrees'])and (!empty($_POST['legumes']) OR !empty($_POST['1']))){
	

$donnees = getVendeurParDepartementEtNomProduit($bdd, $_POST['dep'], $_POST['1']);





//echo 'p';
	//if((!empty($_POST['legumes']) OR !empty($_POST['fruit'])) AND !empty($_POST['dep'])){

			header('Location: index.php?page=annoncesOffres'); 

	}else{
		
		
echo 'array()';	//header('Location: index.php?page=offres&m=Veuillez choisir au moins un fruit ou légume et sélectionnez un département'); 
	}


require('vues/offres.php');
?>