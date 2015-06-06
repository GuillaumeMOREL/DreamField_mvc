<div id="container_forum">

		<div id="ecart">
			<fieldset id="topic">
				<div id="newtopic_forum"><h3 id="nt_forum">Nouveau Topic</h3></div>
				<form method="post" action="deposertopic.php" >
					Username :  <input type="text" name="username" id="username" placeholder="Tapez le username" width="150px" /></br></br>
					Titre :  <input type="text" name="titre" id="titre" placeholder="Tapez le titre..." width="150px" /></br></br>
					 <textarea  classs="contenu_forum" name="contenu" rows="8" cols="45">Contenu...</textarea></br></br>
					<input type="submit" value="Envoyer" />
				</form>
			</fieldset>
			</br></br>

		<?php
	
		//requête
		$req = $bdd->query('SELECT id, titre, username FROM forum');
		?>
		
		<div id="principal">Liste des topics</div>

		<?php
		//Parcours de la base de données
		while($cat=$req->fetch())
		{//mise en page?>

			<fieldset>
				<legend><?php echo $cat['titre']." de ".$cat['username'] ?></legend>
				<h3>Date de publication : </h3>
				<h3>Lien : <a href="?page=sujet&id=<?php echo $cat['id'] ?>"> Cliquez-ici !</a></h3>
			</fieldset>
			</br>

		<?php
		}?>

		<?php
		//fermeture de la requête
		$req->CloseCursor();
		?>
</div>
