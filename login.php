
<?php
require("controleurs/database_connect.php");

if(isset($_POST['formeconnexion']))
    {

      $mailconnect = htmlspecialchars($_POST['mailconnect']);
      $passconnect = sha1($_POST['passconnect']);
      

if(!empty($mailconnect) AND !empty($passconnect))
	{

      $req = $bdd-> prepare("SELECT * FROM utilisateurs WHERE mail= ? AND pass= ? LIMIT 1");
	    
	    $req->execute(array($mailconnect, $passconnect));
	    // print_r($req);
	    $resultuser = $req->fetch(PDO::FETCH_ASSOC);
	    // print_r($resultuser);

    if($resultuser != FALSE )
      {
        //echo "passé";
         $_SESSION['id']   = $resultuser['I_D'];
         $_SESSION['mail'] = $resultuser['mail'];
        //print_r($_SESSION);
        header('Location: index.php?page=ProfilUtilisateur&message=Bravo!');

        //header('Location: index.php?page=ProfilUtilisateur&id='.$_SESSION['id']);

     }else  {
       //echo "passé";
         header('Location: index.php?page=connexion&message=mot de pass ou mail incorrect!');
        }

	}else {
    echo "passé";
      header('Location: index.php?page=connexion&message=tous les champs doivent être remplis!');
      }
    }

?>