   <h2 id="h2_offres">
    	Choisissez vos fruits dans la liste proposée:
    </h2> 
    
  <!--  <p> Trouver un produit dans la liste des <a href="#fruits" id="choix"> FRUITS </a><a href="#legumes" id="choix"> LEGUMES </a>  <a href="#regions" id="choix"> REGIONS </a></p>  -->
    


    <h2 id="h2_fruit_legume_region"> FRUITS </h2>


<?php


    while($categorie = $fruits -> fetch()){
    
?>
    <section class="section_fruit_legume">   
	<img class="img_fruit_legume" src="<?php echo $categorie['chemin_photo'];?>" alt="<?php echo $categorie['nom_produit'];?>" title="Cliquez ici pour voir les differentes ventes de ce produit" /></a> </br>
	<h3> <?php echo $categorie['nom_produit'];?> </h3>
	<input type="checkbox" name="<?php echo $categorie['nom_produit'];?>" title="cette liste permet de vous rappeler ce que vous devez acheter"/>
	Ajouter au panier 
	</section>
<?php
} 

$fruits->closeCursor();
?>
	


	<h2 id="h2_fruit_legume_region"> LEGUMES </h2>

	
<?php
    while($categorie = $legumes -> fetch()){
    
?>
    <section class="section_fruit_legume">   
	<img class="img_fruit_legume" src="<?php echo $categorie['chemin_photo'];?>" alt="<?php echo $categorie['nom_produit'];?>" title="Cliquez ici pour voir les differentes ventes de ce produit" /></a> </br>
	<h3> <?php echo $categorie['nom_produit'];?> </h3>
	<input type="checkbox" name="<?php echo $categorie['nom_produit'];?>" title="cette liste permet de vous rappeler ce que vous devez acheter"/>
	Ajouter au panier 
	</section>
<?php
} 

$legumes->closeCursor();
?>


	<h2 id="h2_fruit_legume_region"> RÉGIONS </h2>


	
   