<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

/*
$req = $bdd->prepare('INSERT INTO utilisateurs(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
$req->execute(array(
	'nom' => $nom,
	'possesseur' => $possesseur,
	'console' => $console,
	'prix' => $prix,
	'nbre_joueurs_max' => $nbre_joueurs_max,
	'commentaires' => $commentaires
	));

echo 'Le jeu a bien été ajouté !';
*/
//$bdd = new PDO('mysql: host=localhost;dbname=dreamfield', 'root', '');

// if (isset ($_POST['valider'])) {
if (empty($_POST['prenom']) OR empty($_POST['nom']) OR empty($_POST['adresse']) OR empty($_POST['codepost']) OR empty($_POST['mail']) OR empty($_POST['tel']) OR empty($_POST['pass']) OR empty($_POST['passverif']) OR empty($_POST['conditions']) OR empty($_POST['ville'])) 
	{
		header('location: /vues/inscription.php?error=empty');
	}
	    $req= $bdd-> prepare('SELECT count(mail) AS nbre_mail FROM utulisateurs WHERE mail= ?');
	    $req->execute(array($_POST['mail']));
	    $result = $req->fetch();

if ($result['nbre_mail'] > 0) {
	header('location: /vues/inscription.php?error=existe');
}
elseif ($_POST['pass'] != $_POST['passverif']) {
	header('Location: /vues/inscription.php?error=different');
}
	else {/*
		$nom= htmlspecialchars(trim($_POST['nom']));
		$prenom = htmlspecialchars(trim($_POST['prenom']));
		$adresse = htmlspecialchars(trim($_POST['adresse']));
		$codepost = htmlspecialchars(trim($_POST['codepost']));
		$mail = htmlspecialchars(trim($_POST['mail']));
        $tel = htmlspecialchars(trim($_POST['tel']));
        $pass = htmlspecialchars(trim($_POST['pass']));
        $passverif = htmlspecialchars(trim($_POST['passverif']));
        $conditions = htmlspecialchars(trim($_POST['conditions']));
        $date_inscription = htmlspecialchars(trim($_POST['date_inscription']));
        $civilite = htmlspecialchars(trim($_POST['civilite']));

		$req = $bdd-> prepare('INSERT INTO utilisateurs(nom, prenom, adresse, codepost, mail, tel, pass, passverif, conditions, date_inscription, civilite) VALUES(:nom, :prenom, :adresse, :codepost, :mail, :tel, :pass, :passverif, :conditions, :date_inscription, :civilite)');
	    $req->execute(array(
	    	'nom'=> $nom,
	    	'prenom'=> $prenom,
	    	'adresse'=> $adresse,
	    	'codepost'=> $codepost,
	    	'mail'=> $mail,
	    	'tel'=> $tel,
	    	'valider'=>$valider,
	    	'passverif' =>$passverif,
	    	'conditions' => $conditions,
	    	'date_inscription' => $date_inscription
	        ));
	    $req->closecursor();*/
	     echo "<script type='text/javascript'>document.location.replace('connexion.php');</script>";
	    $req = $bdd-> prepare('INSERT INTO utilisateurs(prenom, nom, adresse, codepost, mail, tel, pass, passverif, conditions, ville) VALUES(?,?,?,?,?,?,?,?,?,?)');
	    $req->execute(array($_POST['prenom'], $_POST['nom'], $_POST['adresse'], $_POST['codepost'],$_POST['mail'], $_POST['tel'], $_POST['pass'], $_POST['passverif'], $_POST['conditions'], $_POST['ville']));
	    $req->closecursor();
 	}
    

?>

