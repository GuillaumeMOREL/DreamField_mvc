<?php

		//Partie Sujet
		$req = $bdd->query('SELECT id, titre, username, question, date_de_publication FROM forum');?>

<div id="container_sujet">
	<div id="container-bis_sujet">

		<div id="principal_sujet">
			<h3 class="donnee_sujet" >Sujet :</h3>
		</div>

		<?php
		//Parcours de la base de données
		while($cat=$req->fetch())
		{//mise en page
			if($cat['id']==$_GET['id'])
			{
				?>
				
			<fieldset>
					<legend><?php echo $cat['titre']." de ".$cat['username'] ?></legend>
					<h3 class="donnee_sujet" id="ddp_sujet">Date de publication : <?php echo $cat['date_de_publication']?></h3>
					<h3 class="donnee_sujet" >Description : </h3><?php echo $cat['question'] ?>
			</fieldset>

			<?php
			}	
		}
		//Partie commentaires
		$req = $bdd->query('SELECT id, id_sujet, titre, contenu, username, date_de_publication FROM commentaires');?>

		<div id="liste_sujet">
			<h3>Liste des commentaires :</h3>
		</div>

		<?php
			while($cat=$req->fetch())
			{
				if($cat['id_sujet']==$_GET['id'])
					{ 
		?>
		        <fieldset>
		        	<?php echo $cat['titre'] ?> - <?php echo $cat['username']?>
					<h4 class="donnee_sujet" >Description : </h4><?php echo $cat['contenu'] ?>
					<h4 class="donnee_sujet" >Date de publication : <?php echo $cat['date_de_publication']?> </h4>
				</fieldset>
				<?php 
				}
			}
				?>
		<fieldset>
			<div id="newcomment-titre_sujet">
				<h3 class="donneebis_sujet">Nouveau Commentaire :</h3>
			</div>
				<form method="post" action="?page=deposermessage&id=<?php echo $_GET['id'] ?>" >

					<div id="newcomment_sujet">
		                <div class="newcomment-bis_sujet" >Username :</div>  <input class="champ_sujet" type="text" name="username" id="username" placeholder="Tapez le username" /></br>
		                <div class="newcomment-bis_sujet" >Titre :</div>  	<input class="champ_sujet" type="text" name="titre" id="titre" placeholder="Tapez le titre..." /></br>
		            </div>

		            <textarea  id="contenu_sujet" name="contenu" rows="8" cols="45">Contenu...</textarea></br>
		            <input id="envoyer_sujet" type="submit" value="Envoyer" />
	            	
	            </form>
		</fieldset>
	</div>
</div>