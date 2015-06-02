<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Article</title>
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/set1.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>	
	<?php
	
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', 'root');
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}
		

		//Partie Sujet
		$req = $bdd->query('SELECT id, titre, username, question FROM forum');?>


		<div id="container1">
		<div id="ecart">
		<div id="principal"><h3>Sujet</h3></div>

		<?php
		
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
		$req = $bdd->query('SELECT id, id_sujet, titre, contenu, username FROM commentaires');?>

		<div id="principal"><h3>Liste des commentaires</h3></div>

		<?php
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
	</br></br></br>
	<fieldset>
				<div id="principal"><h3>Nouveau Commentaire</h3></div>
				<form method="post" action="deposermessage.php?id=<?php echo $_GET['id'] ?>" >
                    Username  <input type="text" name="username" id="username" placeholder="Tapez le username" width="150px" /></br></br>
                    Titre  <input type="text" name="titre" id="titre" placeholder="Tapez le titre..." width="150px" /></br></br>
                     <textarea  name="contenu" rows="8" cols="45">Contenu...</textarea></br></br>
                    <input type="submit" value="Envoyer" />
                </form>
			</fieldset></div></div>
</html>	
	