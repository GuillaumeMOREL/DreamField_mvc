<?php
require('modeles/function_ProfilUtilisateur.php');
require('modeles/function_offres.php');


  if(isset($_POST['ok'])){
       	 $supression = suppAnnonces($bdd, $_POST['idannonce']);
       }
if(isset($_GET['id']) AND $_GET['id'] > 0)
     {
       $getid = intval($_GET['id']); 
       $userinfo = getuser($bdd, $getid);
     //  $annonce = getAnnonceParId($bdd, $_GET['id']);
       $ann = getAnnonceParId($bdd, $getid);

     }

require('vues/ProfilUtilisateur.php');

?>  