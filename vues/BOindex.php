<?php if (!isset($_POST['afficherannonce']) and !isset($_POST['afficherusers']))
{ ?>
		
	
	<div class="boform">
	<form  method="post" action ="?page=BOindex">
	<input name="afficherannonces" type="submit" class="boinput" value="Afficher les annonces"></input>
	<input name="afficherusers" type="submit" class="boinput" value="Afficher les utilisateurs"></input>
	</form>
	</div>

<?php 

}
elseif(isset($_POST['afficherusers'])) 
	{ ?>
	
	<?php while ($utilisateurs = $users->fetch()) {?>

		<form class="Boform" method="post" action="?page=BOindex">
			<input type="hidden" name="formrempli" value="1"/>
				<li><?php echo $utilisateurs['I_D'] ?></li>
				<li><?php echo $utilisateurs['nom'] ?></li>
				<li><?php echo $utilisateurs['prenom'] ?></li>
				<li>Admin: <?php echo $utilisateurs['admin'] ?></li>
		<!--<li><?php //echo $utilisateurs['I_D'] ?></li>-->
      		<input type="hidden" name="id" value="<?php echo $utilisateurs['I_D'] ?>"/>
      	<input type="submit" value="Supprimer"  name="delete" />
    	</form>

	<?php  }
}
		 

elseif(isset($_POST['afficherannonces'])) 
	{ ?>
	
	<?php while ($announce = $annonces->fetch()) {?>

		<form class="Boform" method="post" action="?page=BOindex">
			<input type="hidden" name="formrempli" value="1"/>
				<li><?php echo $announce['id_annonce'] ?></li>
				<li><?php echo $announce['nom_produit'] ?></li>
				<li><?php echo $announce['id_vendeur'] ?></li>
		<!--	<li><?php //echo $annonce['admin'] ?></li>
				<li><?php //echo $utilisateurs['I_D'] ?></li>-->
      		<input type="hidden" name="id" value="<?php echo $utilisateurs['I_D'] ?>"/>
      	<input type="submit" value="Supprimer"  name="delete" />
    	</form>

	<?php  }
}
		 ?>




