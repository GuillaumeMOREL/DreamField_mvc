<?php
require('modeles/function_ProfilUtilisateur.php');

if(isset($_GET['id']) AND $_GET['id'] > 0)
     {
       $getid = intval($_GET['id']); 
       $userinfo = getuser($bdd, $getid);
     }
       require('vues/ProfilUtilisateur.php');

?>  

<?php/*

  if(isset($_GET['id']) AND $_GET['id'] > 0)
     {
       $getid = intval($_GET['id']); 
       $requser = $bdd-> prepare('SELECT * FROM utilisateurs WHERE I_D = ?');
       $requser->execute(array($getid));
       $userinfo = $requser->fetch();
    */
?> 