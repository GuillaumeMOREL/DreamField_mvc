<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/contact.css" />
</head>	
	<?php
	
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', '');
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}
		

		//Partie Sujet
		$req = $bdd->query('SELECT id, titre, username, question FROM forum');
		
		//Parcours de la base de données
		while($cat=$req->fetch())
		{//mise en page
			if($cat['id']==$_GET['id'])
			{
				?>
			<fieldset>
					<legend><?php echo $cat['titre']." de ".$cat['username'] ?></legend>
					<h3>Date de publication : </h3>
					<h3>Description : </h3><?php echo $cat['question'] ?>
				</fieldset></br></br></br></br><?php
			}	
		}


		//Partie commentaires
		$req = $bdd->query('SELECT id, id_sujet, titre, contenu, username FROM commentaires');

		while($cat=$req->fetch())
		{
			if($cat['id_sujet']==$_GET['id'])
			{ ?>
	            <fieldset><?php echo $cat['titre'] ?> - <?php echo $cat['username']?>
				<h4>Description : </h4><?php echo $cat['contenu'] ?>
				<h4>Date de publication : </h4></fieldset>
			<?php 
			}
		}
		
	?>
	<a href="deposermessage.php?id=<?php echo $cat['id'] ?>"> deposer votre commantaire ! !</a>
</html>	
	