<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
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
		 $reqmail = $bdd-> prepare('SELECT count(mail) AS nbre_mail FROM utilisateurs WHERE mail= ?');
	    $reqmail->execute(array($mail));
	    $result = $reqmail->fetch();
	 if($result ['nbre_mail'] == 0)
	  {
        if($pass == $passverif)
       {
       	 header('Location: connexion.php?message=vos identifiants ont été bien enregistrés.Vous pouvez vous connecter');
	    $req = $bdd-> prepare('INSERT INTO utilisateurs(prenom, nom, adresse, codepost, mail, tel, pass, passverif, conditions, ville) VALUES(?,?,?,?,?,?,?,?,?,?)');
	    $req->execute(array($prenom, $nom, $adresse, $codepost,$mail, $tel, $pass, $passverif, $conditions, $ville));
        }
       
         else
          {
         	header('Location: inscription.php?msg=<font color ="red">Vos mots de passe ne sont pas identiques </font>');
          }
      }
         else
          {
            header('Location: inscription.php?msg=Ce mail existe déjà !');
          }
      }
	    else
	    {
          header('Location: inscription.php?msg=votre mot de passe est trop long!');
	    }
	}
	else {
	   header('Location: inscription.php?msg=tous les champs doivent être remplis!');
 	}
 }
 	?>