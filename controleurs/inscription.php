<?php
require_once('modeles/function_inscription.php'); 
	
	if(isset($_POST['valider']))
	{
		$prenom =htmlspecialchars($_POST['prenom']);
		$nom =htmlspecialchars($_POST['nom']);
		$adresse =htmlspecialchars($_POST['adresse']);
		$numero_departement =htmlspecialchars($_POST['numero_departement']);
		$mail =htmlspecialchars($_POST['mail']);
		$tel =htmlspecialchars($_POST['tel']);
		$pass =sha1($_POST['pass']);
		$passverif =sha1($_POST['passverif']);
    	$conditions= htmlspecialchars($_POST['conditions']);

if (!empty($prenom) AND !empty($nom) AND !empty($adresse) AND !empty($numero_departement) AND !empty($mail) AND !empty($tel) AND !empty($pass) AND !empty($passverif) AND !empty($conditions)) 
{
	$passlength = strlen($pass);
	if($passlength <= 80)
	{
		$email = getMail($bdd, $mail);

	 
		
	 if($email ['nbre_mail'] == 0)
	  {
        if($pass == $passverif)
       {
       		$InfoUser = registerInfoUser($prenom, $nom, $adresse, $numero_departement, $mail, $tel, $pass, $passverif, $conditions, $bdd);
       		
       	 header('Location: index.php?page=connexion&message=Vos identifiants ont été bien enregistrés.Vous pouvez vous connecter');
			
       	 	
	  	 }
         else
          {
         	header('Location: index.php?page=inscription&message=msg=<font color ="red">Vos mots de passe ne sont pas identiques </font>');
          }
      }
         else
          {
            header('Location: index.php?page=inscription&msg=Ce mail existe déjà !');
          }
      }
	    else
	    {
          header('Location: index.php?page=inscription&msg=votre mot de passe est trop long!');
	    }
	}
	else {
	   header('Location: index.php?page=inscription&msg=tous les champs doivent être remplis!');
 	}
} 
require('vues/inscription.php');

?>