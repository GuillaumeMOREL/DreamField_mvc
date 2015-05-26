<?php
session_start();
try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', '');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}

if(isset($_POST['formeconnexion']))
    {

      $mailconnect = htmlspecialchars($_POST['mailconnect']);
      $passconnect = sha1($_POST['passconnect']);
      //echo $passconnect;
if(!empty($mailconnect) AND !empty($passconnect))
	{

      $req = $bdd-> prepare("SELECT * FROM utilisateurs WHERE mail= ? AND pass= ? LIMIT 1");
	  //print_r($req);
	  $req->execute(array($mailconnect, $passconnect));
	  
	  $resultuser = $req->fetch(PDO::FETCH_ASSOC);
	 // print_r($resultuser);
  if($resultuser != FALSE )
      {
         $_SESSION['id']   = $resultuser['I_D'];
         $_SESSION['mail'] = $resultuser['mail'];
        //print_r($_SESSION);
        header("Location: profilUtilisateur.php?id=".$_SESSION['id']);
     }
else
        {
         header('Location: connexion.php?mssg=mot de pass ou mail incorrect!');
        }
	}
else
      {
      header('Location: connexion.php?mssg=tous les champs doivent être remplis!');
      }
    }
?>