	<div id="container_forum">

<?php
	
		//requête
$req = $bdd->query('SELECT id, titre, username, date_de_publication FROM forum');
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
			<div id="topic_forum">
				<fieldset id="topic-bis_forum">
					<div id="titre-topic_forum">
						<a href="?page=sujet&id=<?php echo $cat['id'] ?>">
							<h3 id="titre-topic-bis_forum"><legend><?php echo $cat['titre']." de ".$cat['username'] ?></legend></h3>
						</a>
					</div>
					<div>Date de publication : <?php echo $cat['date_de_publication']?></div>
				</fieldset>
			</div>
				</br>
<?php
}
?>
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
				
				<div id="newtopic_forum">
					<form id="newtopic-bis_forum" method="post" action="?page=deposertopic" >
					<div id="donnee_forum">
						Username :  <input class="champ_forum" id="username-donnee_forum" type="text" name="username" id="username" placeholder="Tapez le username" /></br></br>
						Titre :  <input class="champ_forum" id="titre-donnee_forum" type="text" name="titre" id="titre" placeholder="Tapez le titre..." /></br></br>
					</div>

						 <textarea  id="contenu_forum" name="contenu" rows="8" cols="45">Contenu...</textarea></br></br>
						<input id="valider_forum" type="submit" value="Envoyer" />
					</form>
				</div>

			</fieldset>
			</br></br>
</div>
