<?php

require('vues/inscription.php');
if(isset($_POST['valider']))
{
	$prenom =htmlspecialchars($_POST['prenom']);
	$nom =htmlspecialchars($_POST['nom']);
	$adresse =htmlspecialchars($_POST['adresse']);
	$codepost =htmlspecialchars($_POST['codepost']);
	$mail =htmlspecialchars($_POST['mail']);
	$tel =htmlspecialchars($_POST['tel']);
	$pass =sha1($_POST['pass']);
	$passverif =sha1($_POST['passverif']);
	$ville =htmlspecialchars($_POST['ville']);
    $conditions= htmlspecialchars($_POST['conditions']);
if (!empty($prenom) AND !empty($nom) AND !empty($adresse) AND !empty($codepost) AND !empty($mail) AND !empty($tel) AND !empty($pass) AND !empty($passverif) AND !empty($conditions) AND !empty($ville)) 
{
	
	$passlength = strlen($pass);
	if($passlength <= 80)
	{
		$inscription = $verifInscription($bdd);

	 if($result ['nbre_mail'] == 0)
	  {
        if($pass == $passverif)
       {
       	 header('Location: connexion.php?message=<font color ="red"> Vos identifiants ont été bien enregistrés.Vous pouvez vous connecter </font>'); 

       	 $ajoutDansBdd = $ajoutInfoUtilisateur(bdd);


         else
          {
         	header('Location: inscription.php?msg=<font color ="red">Vos mots de passe ne sont pas identiques </font>');
          }
      }
         else
          {
            header('Location: inscription.php?msg=<font color = "red">Ce mail existe déjà </font>');
          }
      }
	    else
	    {
          header('Location: inscription.php?msg=<font color ="red"> votre mot de passe est trop long </font>');
	    }
	}
	else {
	   header('Location: inscription.php?msg=<font color ="red">Tous les champs doivent être remplis </font>');
 	}
 }


require('modeles/register_inscription.php');