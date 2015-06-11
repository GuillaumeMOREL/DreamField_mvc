<div id="container_bo">

<?php if (!isset($_POST['afficherannonces']) and !isset($_POST['afficherusers']))
{ ?>
		
	
	<div id="boform">
	<form  method="post" action ="?page=BOindex">
	<a class="bo_form"> <input class="input_bo" name="afficherannonces" type="submit" class="boinput" value="Afficher les annonces"></input></a>
	<a class="bo_form"> <input class="input_bo" name="afficherusers" type="submit" class="boinput" value="Afficher les utilisateurs"></input></a>
	</form>
	</div>

<?php 

}
elseif(isset($_POST['afficherusers'])) 
	{?>

<div id="users_bo">
<?php
		while ($utilisateurs = $users->fetch()) {?>

		<form class="users-bis_bo" method="post" action="?page=BOindex">
			<input type="hidden" name="formrempli" value="1"/>
				<li>ID : <?php echo $utilisateurs['I_D'] ?></li>
				<li>Nom : <?php echo $utilisateurs['nom'] ?></li>
				<li>Prenom : <?php echo $utilisateurs['prenom'] ?></li>
				<li>Admin: <?php echo $utilisateurs['admin'] ?></li>
		<!--<li><?php //echo $utilisateurs['I_D'] ?></li>-->
      		<input type="hidden" name="id" value="<?php echo $utilisateurs['I_D'] ?>"/>
      	<input class="supprimer_bo" type="submit" value="Supprimer"  name="delete" />
    	</form>

	<?php  } ?>
</div>
<div class="retour_bo">
<a href="?page=BOindex" > <input class="retour-bis_bo" type="submit" value="Retour"  name="Retour" /></a>
</div>
<?php
} 
		 

elseif(isset($_POST['afficherannonces'])) 
	{ ?>
	<div id="annonces_bo">

	 <?php while ($announce = $annonces->fetch()) {?>

		<form class="annonces-bis_bo" method="post" action="?page=BOindex">
			<input type="hidden" name="formfull" value="1"/>
				<li>ID : <?php echo $announce['id_annonce'] ?></li>
				<li>Produit : <?php echo $announce['nom_produit'] ?></li>
				<li>Vendeur : <?php echo $announce['id_vendeur'] ?></li>
		<!--	<li><?php //echo $announce['admin'] ?></li>
				<li><?php //echo $announce['I_D'] ?></li>-->
      		<input type="hidden" name="idann" value="<?php echo $announce['id_annonce'] ?>"/>
      	<input class="supprimer_bo" type="submit" value="Supprimer"  name="delete" />
    	</form>

	<?php  } ?>
</div>
<div class="retour_bo">
<a href="?page=BOindex" > <input class="retour-bis_bo" type="submit" value="Retour"  name="Retour" /></a>
</div>
<?php	
}
		 ?>

</div>


