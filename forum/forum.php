<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Forum</title>
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/set1.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/sidebar.css" />
	<script src="js/snap.svg-min.js"></script>
</head>
	<div id="container1">
            <div id="principal"><h1>Forum</h1></div>
            <nav id="menu" class="menu">
				<button class="menu__handle"><span>Menu</span></button>
				<div class="menu__inner">
					<ul>
						<li><a href="#"><i class="fa fa-fw fa-home"></i><span>Home<span></a></li>
						<li><a href="#"><i class="fa fa-fw fa-heart"></i><span>Favs<span></a></li>
						<li><a href="#"><i class="fa fa-fw fa-folder"></i><span>Files<span></a></li>
						<li><a href="#"><i class="fa fa-fw fa-tachometer"></i><span>Stats<span></a></li>
					</ul>
				</div>
				<div class="morph-shape" data-morph-open="M300-10c0,0,295,164,295,410c0,232-295,410-295,410" data-morph-close="M300-10C300-10,5,154,5,400c0,232,295,410,295,410">
					<svg width="100%" height="100%" viewBox="0 0 600 800" preserveAspectRatio="none">
						<path fill="none" d="M300-10c0,0,0,164,0,410c0,232,0,410,0,410"/>
					</svg>
				</div>
			</nav>
    
    <?php
    	//Connexion	
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', '');
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}?>


		<div id="ecart">
			<fieldset id="topic">
				<div id="principal"><h3>Nouveau Topic</h3></div>
				<form method="post" action="addTopic.php" >
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
</html>