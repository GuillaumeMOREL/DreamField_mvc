<?php
require_once('controleurs/database_connect.php');

function getMail($bdd, $mail){
$reqmail = $bdd-> prepare('SELECT count(mail) AS nbre_mail FROM utilisateurs WHERE mail= ?');
	    $reqmail->execute(array($mail));
	    $result = $reqmail->fetch();
	    return $result;

	}
	
function registerInfoUser($prenom, $nom, $adresse, $numero_departement, $mail, $tel, $pass, $passverif, $conditions, $photo_profil, $bdd){
	 $req = $bdd-> prepare('INSERT INTO utilisateurs(prenom, nom, adresse, numero_departement, mail, tel, pass, passverif, conditions, photo_profil, date_inscription) VALUES(?,?,?,?,?,?,?,?,?,?,NOW())');	  
	    $req->execute(array($prenom, $nom, $adresse, $numero_departement,$mail, $tel, $pass, $passverif, $conditions,"default.jpg"));
	    return $req;

	}
?>