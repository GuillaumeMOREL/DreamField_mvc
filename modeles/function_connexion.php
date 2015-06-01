
<?php
require_once("controleurs/database_connect.php");

function verifMailPass($bdd);
 $req = $bdd-> prepare("SELECT * FROM utilisateurs WHERE mail= ? AND pass= ? LIMIT 1");
	    
	      $req->execute(array($mailconnect, $passconnect));
	      // print_r($req);
	      $resultuser = $req->fetch(PDO::FETCH_ASSOC);
	      return $resultuser;


?>