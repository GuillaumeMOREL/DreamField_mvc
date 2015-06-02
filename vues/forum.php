<div id="container1">
            <div id="principal"><h1 id="titre_forum">Forum</h1></div>
    
    <?php
    	//Connexion	
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', 'root');
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}?>


		<div id="ecart">
			<fieldset id="topic">
				<div id="principal"><h3>Nouveau Topic</h3></div>
				<form method="post" action="deposertopic.php" >
					Username :  <input type="text" name="username" id="username" placeholder="Tapez le username" width="150px" /></br></br>
					Titre :  <input type="text" name="titre" id="titre" placeholder="Tapez le titre..." width="150px" /></br></br>
					 <textarea  name="contenu" rows="8" cols="45">Contenu...</textarea></br></br>
					<input type="submit" value="Envoyer" />
				</form>
			</fieldset>
			</br></br></br></br>

		<?php


	
		//requête
		$req = $bdd->query('SELECT id, titre, username FROM forum');?>
		
		<div id="principal">Liste des topics</div>

		<?php
		//Parcours de la base de données
		while($cat=$req->fetch())
		{//mise en page?>
			<fieldset>
					<legend><?php echo $cat['titre']." de ".$cat['username'] ?></legend>
					<h3>Date de publication : </h3>
					<h3>Lien : <a href="sujet.php?id=<?php echo $cat['id'] ?>"> cliquez-ici !</a></h3>
				</fieldset></br><?php
		}?></div></div><?php
	
		//fermeture de la requête
		$req->CloseCursor();
		?>

