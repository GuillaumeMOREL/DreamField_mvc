<?php
    	//Connexion	
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', 'root');
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}

		$req = $bdd->prepare('INSERT INTO commentaires(titre, contenu, username) VALUES(:titre, :contenu, :username)');

		

			$req->execute(array(
			    'titre' => $_POST['titre'],
				'contenu' => $_POST['contenu'],
				'username' => $_POST['username'])); 
		header('location:sujet.php?id='.echo $_GET['id']?>');
?>