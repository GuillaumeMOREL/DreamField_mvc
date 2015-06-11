<div id="container_offres">
  <div id="container-bis_offres">

    <div id="titre_offres">
      Choisissez vos produits dans la liste proposée:
    </div> 
        
      <!--  <p> Trouver un produit dans la liste des <a href="#fruits" id="choix"> FRUITS </a><a href="#legumes" id="choix"> LEGUMES </a>  <a href="#regions" id="choix"> REGIONS </a></p>  -->
        
    <form id="form_offres" method="post" name="formulaire-choixdenrees" action="?page=offres"> 

      <div class="titre-bis_offres"> FRUITS </div>
      <div class="offres_offres">

    <?php $tour = 0;
      while($categorie = $fruits -> fetch()){
        $tour=$tour+1;
    ?>
      <section class="section_fruit_legume_offres">   
      	<img class="img_fruit_legume_offres" src="<?php echo $categorie['chemin_photo'];?>" alt="<?php echo $categorie['nom_produit'];?>" title="Cliquez ici pour voir les differentes ventes de ce produit" /></a> </br>
      	<h3> <?php echo $categorie['nom_produit'];?> </h3>
      	<input type="checkbox" value="<?php echo $categorie['nom_produit'];?>"  name="fruits" title="cette liste permet de vous rappeler ce que vous devez acheter"/>
      	Ajouter au panier 
    	</section>

    <?php
      } 
      $fruits->closeCursor();
    ?>

    	<div class="titre-bis_offres"> LEGUMES </div>

    <?php
      while($categorie = $legumes -> fetch()){
    ?>

      <section class="section_fruit_legume_offres">   
      	<img class="img_fruit_legume_offres" src="<?php echo $categorie['chemin_photo'];?>" alt="<?php echo $categorie['nom_produit'];?>" title="Cliquez ici pour voir les differentes ventes de ce produit" /></a> </br>
      	<h3> <?php echo $categorie['nom_produit'];?> </h3>
      	<input type="checkbox" name="legumes" value="<?php echo $categorie['nom_produit'];?>" title="cette liste permet de vous rappeler ce que vous devez acheter"/>
      	Ajouter au panier 
    	</section>

    <?php
    } 
    $legumes->closeCursor();
    ?>
    </div>

      <p id="choix_offres">
        <label id="titre-choix_region" for="region">Dans quel région habitez-vous ?</label><br />
          <select id="differente-region_offres" name="regions" id="regions">
            <optgroup label="">

              <?php
                while($carte_de_france = $region -> fetch())
                {
              ?>
              <div >
              <option value="<?php echo $carte_de_france['nom_departement'];?>"><?php echo $carte_de_france['nom_departement'];?></option><br />
              </div>
    <?php
    }
    $region->closeCursor();
    ?>
        <br />

            </optgroup>
          </select>

      </p>
          <div id="validation-choixdenrees_offres">
            <input id="validation-choixdenrees-bis_offres" type="submit" name="formchoixdenrees"  value="Trouver les vendeurs correspondant à mes envies" />
          </div>

    </form>
  </div>
</div>
