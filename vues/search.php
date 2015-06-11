<?php if (!isset($_POST['submit']))
{ ?>
		
	
	<div class="boform">
	<form  method="post" action ="?page=search">
	<input name="afficherannonces" type="text-area" class="boinput" placeholder="Recherche avancée"></input>
	<input name="afficherusers" type="submit" class="boinput" value="GO!"></input>
	</form>
	</div>

<?php 

}
elseif(isset($_POST['users'])) 
	{
		while ($utilisateurs = $name->fetch()) {?>

		<form class="Boform" method="post" action="?page=BOindex">
			<input type="hidden" name="formrempli" value="1"/>
				
				<li><?php echo $utilisateurs['nom'] ?></li>
				<li><?php echo $utilisateurs['prenom'] ?></li>
				<li><a href=""class="text-footer">Accéder</a></li>
		<!--<li><?php //echo $utilisateurs['I_D'] ?></li>-->
      		<input type="hidden" name="id" value="<?php echo $utilisateurs['I_D'] ?>"/>
      	
    	</form>

	<?php  }
}
		 

elseif(isset($_POST['categorie'])) 
	{ 
	 while ($announce = $annonces->fetch()) {?>

		<form class="Boform" method="post" action="?page=BOindex">
			<input type="hidden" name="formfull" value="1"/>
			
				<li><?php echo $announce['nom_produit'] ?></li>
				<li>Prix: <?php echo $announce['prix'] ?> €</li>
				<li>Poids: <?php echo $announce['nbPoidsQuant'];?> <?php echo $announce['PoidsQuant']?></li>
				<li><a href=""class="text-footer">Accéder</a></li>
		<!--	<li><?php //echo $announce['admin'] ?></li>
				<li><?php //echo $announce['I_D'] ?></li>-->
      		<input type="hidden" name="idann" value="<?php echo $announce['id_annonce'] ?>"/>
      	
    	</form>

	<?php  }
}
		 ?>
