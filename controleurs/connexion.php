<<<<<<< Updated upstream
<?php

require_once('modeles/connexion.php'); 

=======
>>>>>>> Stashed changes

<?php

require_once('modeles/function_connexion.php'); 

if(isset($_POST['formconnexion']))
{

      $mailconnect = htmlspecialchars($_POST['mailconnect']);
      $passconnect = sha1($_POST['passconnect']);
      

    if(!empty($mailconnect) AND !empty($passconnect))
	  {
    	$verif = verifMailPass($bdd,$mailconnect,$passconnect);

       if($verif != FALSE )
       {
        
         $_SESSION['id']   = $resultuser['I_D'];
         $_SESSION['mail'] = $resultuser['mail'];


        header('Location: index.php?page=ProfilUtilisateur&id='.$_SESSION['id']);


     }else  {
       
         header('Location: index.php?page=connexion&message=Mot de pass ou mail incorrect!');
        }

	}else {
  
      header('Location: index.php?page=connexion&message=Tous les champs doivent être remplis!');
      }
    } 

require('vues/connexion.php');

?>