<div style="margin-top:60px"></div>
<div class="liste-offres">


<h1> Voici les vendeurs dans le département que vous avez sélectionnés.</h1>



<?php

	foreach($donnees as $elements){

?> 


    
	<a href="#redirige sur profil du vendeurs ac l'offre" title="<?php echo $elements['id_annonce'];?>">
	<div class="box_vendeurs"> 
		<div class="date">
			<div><?php echo $elements['date_annonce']; ?></div>
		</div>	
		<div class="image">

			<div class="image-and-nb">
				<img src="/static/img/photo_fruit_legume/<?php echo $elements['nom_produit'];?>.jpg" alt="<?php echo $elements['id_annonce'];?>"/>
			</div>
		</div>
		<div class="detail">
			<h2 class="nom-vendeurs"><?php echo $elements['prenom'].' '.$elements['nom'];?></h2>
			<div class="produit"><?php echo $elements['nom_produit'];?> </div>
			<!-- <div class="categorie"><?php echo $elements['categorie'];?></div> -->
			<div class="quantite"><?php echo $elements['nbPoidsQuant']. ' '.$elements['PoidsQuant'];?></div>
	 <!--   <div class="departement">#departement</div> -->
			<div class="prix"><?php echo $elements['prix'];?> €</div>
			<div class="clear"></div> 
		</div>
	</div>
	</a>
	<div class="clear"></div>

</div>
<?php

}
?>
