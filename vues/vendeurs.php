<div style="margin-top:60px"></div>
<div class="liste-offres">

<?php

	foreach($dn as $annonces){

?> 

<h1> Voici les vendeurs dans le département: <?php echo $annonces['departement_annonce'];?> </h1>

    
	<a href="#redirige sur profil du vendeurs ac l'offre" title="<?php echo $annonces['id_annonce'];?>">
	<div class="box_vendeurs"> 
		<div class="date">
			<div>Jour</div>
			<div>Heure</div>
		</div>	
		<div class="image">
			<div class="image-and-nb">
				<img src="<?php echo $annonces['photo_offre'];?>" alt="<?php echo $annonces['id_annonce'];?>"/>
				<div class="nb">
					<div class="top-radius">&nbsp</div>
					<div class="value radius">1</div>
				</div>
			</div>
		</div>
		<div class="detail">
			<h2 class="nom-vendeurs"><?php echo $annonces['prenom'].' '.$annonces['nom'];?></h2>
			<div class="produit"><?php echo $annonces['nom_produit'];?> </div>
			<!-- <div class="categorie"><?php echo $annonces['categorie'];?></div> -->
			<div class="quantite"><?php echo $annonces['nbPoidsQuant']. ' '.$annonces['PoidsQuant'];?></div>
	 <!--   <div class="departement">#departement</div> -->
			<div class="prix"><?php echo $annonces['prix'];?> €</div>
			<div class="clear"></div> 
		</div>
	</div>
	</a>
	<div class="clear"></div>

</div>
<?php

}
?>
