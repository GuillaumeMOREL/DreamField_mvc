<?php
require_once("controleurs/database_connect.php");

function verifMailPass($bdd,$mailconnect,$passconnect){
 $req = $bdd-> prepare("SELECT * FROM utilisateurs WHERE mail= ? AND pass= ? LIMIT 1");
	    
	      $req->execute(array($mailconnect, $passconnect));
	      $resultuser = $req->fetch(PDO::FETCH_ASSOC);
	      return $resultuser;
}

?>

