<div class="liste-offres">

    <?php 

    while($utilisateur = $vendeurs->fetch()){


    ?>
	<a href="#redirige sur profil du vendeurs ac l'offre" title="<?php echo $annonces['id_annonce'];?>">
	<div class="box_vendeurs"> 
		<div class="date">
			<div>Jour</div>
			<div>Heure</div>
		</div>	
		<div class="image">
			<div class="image-and-nb">
				<img src="aller chercher image du produit de l'utilisateur" alt="<?php echo $annonces['id_annonce'];?>"/>
				<div class="nb">
					<div class="top-radius">&nbsp</div>
					<div class="value radius">1</div>
				</div>
			</div>
		</div>
		<div class="detail">
			<h2 class="nom-vendeurs">#récuperer le nom</h2>
			<div class="produit">#récuperer </div>
			<div class="categorie">#fruitOUlegume</div>
			<div class="departement">#departement</div>
			<div class="prix">récuperer le prix </div>
			<div class="clear"></div> 
		</div>
	</div>
	</a>
	<div class="clear"></div>
	

}
?>