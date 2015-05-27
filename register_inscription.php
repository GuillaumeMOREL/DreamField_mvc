<?php

require("controleurs/database_connect.php");

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

		if($passlength <= 20)
		{
			//echo "passe";
			$reqmail = $bdd-> prepare('SELECT count(mail) AS nbre_mail FROM utilisateurs WHERE mail= ?');
	    	$reqmail->execute(array($mail));
	    	$result = $reqmail->fetch();   
	  	 	
	  	 	if($result ['nbre_mail'] == 0)
	   		{
         
           		if (!($_POST['pass'] === $_POST['passverif']))
          		  {
         			header('Location: index.php?page=inscription&msg=<font color ="red">Vos mots de passe ne sont pas identiques </font>');
        	
        		} else {
	   				$req = $bdd-> prepare('INSERT INTO utilisateurs(prenom, nom, adresse, numero_departement, mail, tel, pass, passverif, conditions) VALUES(?,?,?,?,?,?,?,?,?)');
	   				$req->execute(array($prenom, $nom, $adresse, $numero_departement,$mail, $tel, $pass, $passverif, $conditions));  

	   				header('Location: index.php?page=connexion&msg=vos identifiants ont été bien enregistrés.Vous pouvez vous connecter');
       			}
       
       		}else  {
         	   header('Location: index.php?page=inscription&msg=Ce mail existe déjà !');
       		  }

    	}else  {
          	header('Location: index.php?page=inscription&msg=votre mot de passe est trop long!');
	    }

	}else {
	   header('Location: index.php?page=inscription&msg=tous les champs doivent être remplis!');
 	}
}
?>