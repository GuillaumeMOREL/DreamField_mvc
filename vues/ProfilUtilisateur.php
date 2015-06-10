 <?php
    if(!empty($userinfo['photo_profil']))
    {
    ?>
    <img class="imgprofil" src="avatar/<?php echo $userinfo['photo_profil']; ?>" />
    <?php
    }
    else
    {
    ?>
    <img class="imgprofil" src="avatar/default.jpg/<?php echo $userinfo['photo_profil']; ?>" />
    <?php
    }
    ?>

<div id="milieu_profilUtilisateur">

  <div id="profil_profilUtilisateur" >
    <h3 class="info_profilUtilisateur"> Nom             : <?php echo $userinfo['nom']; ?></h3>
    <h3 class="info_profilUtilisateur"> Prénom          : <?php echo $userinfo['prenom']; ?></h3>
    <h3 class="info_profilUtilisateur"> Téléphone       : <?php echo '0'.$userinfo['tel']; ?></h3>
    <h3 class="info_profilUtilisateur"> Adresse         : <?php echo $userinfo['adresse']; ?></h3>
    <h3 class="info_profilUtilisateur"> Numero de departement     : <?php echo $userinfo['numero_departement']; ?></h3>
    <h3 class="info_profilUtilisateur"> E-mail          : <?php echo $userinfo['mail']; ?></h3>
    <br />
  </div>

   <?php
    if(isset($_SESSION['id']) AND $userinfo['I_D'] == $_SESSION['id']){
    ?>


    <div id="mmp_profilUtilisateur" class="lien_profilUtilisateur">
      <a class=" lien-bis_profilUtilisateur" href ="?page=editionprofil"> Modifier mon profil </a>
    </div>

    <div id="deco_profilUtilisateur" class="lien_profilUtilisateur">
      <a class=" lien-bis_profilUtilisateur" href="?page=Deconnexion"> Se déconnecter </a>
    </div>


    <div id="deco_profilUtilisateur" class="lien_profilUtilisateur">
      <a class=" lien-bis_profilUtilisateur"> Mes annonces </a>
    </div>

    <?php
      foreach($ann as $Annonce){
        ?>
        <div id="box_vendeurs"> 
      <div id="box-bis_vendeurs">
    <div class="detail_vendeurs">

        <div class="produit"><?php echo $Annonce['nom_produit'];?> </div>
        <div class="produit"><?php echo $Annonce['ProduitAutre'];?> </div>

        <div class="date">
          <div><?php echo $Annonce['date_annonce']; ?></div>
        </div>  

        <div class="quantite"><?php echo $Annonce['nbPoidsQuant']. ' '.$Annonce['PoidsQuant'];?></div>

        <div class="prix"><?php echo $Annonce['prix'];?> €</div>

        <input id="ModifAnnonce" type="submit" name="ModifAnnonce" value="Modifier mon annonce" />

      </div>
      </div>
      </div>

    <?php
      }
  }
    ?>
    

  </div> 
</div>