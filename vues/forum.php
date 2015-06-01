
            <h1>Forum</h1>
    
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
	
		//requête
		$req = $bdd->query('SELECT id, titre, username FROM forum');
		
		//Parcours de la base de données
		while($cat=$req->fetch())
		{//mise en page?>
			<fieldset>
					<legend><?php echo $cat['titre']." de ".$cat['username'] ?></legend>
					<h3>Date de publication : </h3>
					<h3>Lien : <a href="sujet.php?id=<?php echo $cat['id'] ?>"> cliquez-ici !</a></h3>
				</fieldset></br></br><?php
		}
		
		//fermeture de la requête
		$req->CloseCursor();

		?>
		<a href="deposertopic.php?id=<?php echo $cat['id'] ?>"> crer votre topic ! !</a>
