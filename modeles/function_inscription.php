<?php
require_once('controleurs/database_connect.php');

function getMail($bdd){
$reqmail = $bdd-> prepare('SELECT count(mail) AS nbre_mail FROM utilisateurs WHERE mail= ?');
	    $reqmail->execute(array($mail));
	    $result = $reqmail->fetch();
	    return $result;

	}
function registerInfoUser($prenom, $nom, $adresse, $numero_departement, $mail, $tel, $pass, $passverif, $conditions, $bdd){
	 $req = $bdd-> prepare('INSERT INTO utilisateurs(prenom, nom, adresse, numero_departement, mail, tel, pass, passverif, conditions) VALUES(?,?,?,?,?,?,?,?,?)');	  
	    $req->execute(array($prenom, $nom, $adresse, $numero_departement,$mail, $tel, $pass, $passverif, $conditions));
	    return $req;
	}
?>