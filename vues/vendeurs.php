<div id="liste-offres_vendeurs">

<div id="titre_vendeurs"> Voici les vendeurs dans le département que vous avez sélectionné :</div>

<?php
	foreach($dn as $annonces){
?> 

	<a href="mailto:<?php echo $userinfo['mail']; ?>" title="<?php echo $annonces['id_annonce'];?>">
		<div id="box_vendeurs"> 
			<div id="box-bis_vendeurs">

			<div id="image_vendeurs">
				<div class="image-bis_vendeurs">
					<img id="img_vendeurs" src="/static/img/photo_fruit_legume/<?php echo $annonces['nom_produit'];?>.jpg" alt="<?php echo $annonces['id_annonce'];?>"/>
				</div>
			</div>

			<div class="detail_vendeurs">
				<h2 class="nom-vendeurs"><?php echo $annonces['prenom'].' '.$annonces['nom'];?></h2>

				<div class="produit"><?php echo $annonces['nom_produit'];?> </div>

				<div class="date">
					<div><?php echo $annonces['date_annonce']; ?></div>
				</div>	

				<div class="quantite"><?php echo $annonces['nbPoidsQuant']. ' '.$annonces['PoidsQuant'];?></div>

				<div class="prix"><?php echo $annonces['prix'];?> €</div>

				<a id="mail_vendeurs" href="mailto:<?php echo $annonces['mail']; ?>">Contacter le vendeur</a>
			</div>
		</div>
		</div>
	</a>
</div>

<?php
}
?>
