<?php
require('modeles/function_ProfilUtilisateur.php');

if(isset($_GET['id']) AND $_GET['id'] > 0)
     {
       $getid = intval($_GET['id']); 
       $userinfo = getuser($bdd, $getid);
     //  $annonce = getAnnonceParId($bdd, $_GET['id']);
     }


require('vues/ProfilUtilisateur.php');

?>  