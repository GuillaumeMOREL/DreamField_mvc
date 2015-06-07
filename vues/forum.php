<div id="container_forum">

		<?php
	
		//requête
		$req = $bdd->query('SELECT id, titre, username FROM forum');
		?>
		
		<div class="titre_forum">
			<div id="principal" class="titre-bis_forum">Liste des topics</div>
		</div>

		<div id="contenu-topic_forum">
			<div id="contenu-topic-bis_forum">
			<?php
			//Parcours de la base de données
			while($cat=$req->fetch())
			{//mise en page?>

				<fieldset id="topic_forum">
					<a href="?page=sujet&id=<?php echo $cat['id'] ?>">
						<legend><?php echo $cat['titre']." de ".$cat['username'] ?></legend>
					</a>
					<h3>Date de publication : </h3>
				</fieldset>
				</br>

			<?php
			}?>

			<?php
			//fermeture de la requête
			$req->CloseCursor();
			?>

			</div>
		</div>

<div id="ecart">
			<fieldset id="topic">

				<div class="titre_forum">
					<div id="nt_forum" class="titre-bis_forum">Nouveau Topic</div>
				</div>
				
				<form id="newtopic_forum" method="post" action="deposertopic.php" >
				<div id="donnee_forum">
					Username :  <input class="champ_forum" id="username-donnee_forum" type="text" name="username" id="username" placeholder="Tapez le username" /></br></br>
					Titre :  <input class="champ_forum" id="titre-donnee_forum" type="text" name="titre" id="titre" placeholder="Tapez le titre..." /></br></br>
				</div>

					 <textarea  id="contenu_forum" name="contenu" rows="8" cols="45">Contenu...</textarea></br></br>
					<input id="valider_forum" type="submit" value="Envoyer" />
				</form>

			</fieldset>
			</br></br>
</div>
