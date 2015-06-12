<div id="milieu_profilUtilisateur">

 <?php
    if(!empty($_SESSION['photo_profil']))
    {
    ?>
    <img class="imgprofil" src="avatar/<?php echo $_SESSION['photo_profil']; ?>" />
    <?php
    }
    else
    {
    ?>
    <img class="imgprofil" src="avatar/default.jpg <?php echo $_SESSION['photo_profil']; ?>" />
    <?php
    }
    ?>

  <div id="profil_profilUtilisateur" >
    <h3 class="info_profilUtilisateur"> Nom             : <?php echo $_SESSION['nom']; ?></h3>
    <h3 class="info_profilUtilisateur"> Prénom          : <?php echo $_SESSION['prenom']; ?></h3>
    <h3 class="info_profilUtilisateur"> Téléphone       : <?php echo '0'.$_SESSION['tel']; ?></h3>
    <h3 class="info_profilUtilisateur"> Adresse         : <?php echo $_SESSION['adresse']; ?></h3>
    <h3 class="info_profilUtilisateur"> Numero de departement     : <?php echo $_SESSION['numero_departement']; ?></h3>
    <h3 class="info_profilUtilisateur"> E-mail          : <?php echo $_SESSION['mail']; ?></h3>
    <br />
  </div>

   <?php
    if(isset($_SESSION['id'])){
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


   <?php   if(isset($Annonce['nom_produit'])){ ?> 
          <form class="Boform" method="post" action="?page=ProfilUtilisateur&id=<?php echo $_SESSION['id'];?>">
                <input type="hidden" name="ok" value="1" /> 
        <div class="produit"><?php echo $Annonce['nom_produit'];?> </div>
        <div class="produit"><?php echo $Annonce['ProduitAutre'];?> </div>

        <div class="date">
          <div><?php echo $Annonce['date_annonce']; ?></div>
        </div>  

        <div class="quantite"><?php echo $Annonce['nbPoidsQuant']. ' '.$Annonce['PoidsQuant'];?></div>

        <div class="prix"><?php echo $Annonce['prix'];?> €</div>




        <input id="modifAnnonce_profilUtilisateur" onclick="document.location.href='?page=editionAnnonce';" type="submit" name="ModifAnnonce" value="Modifier mon annonce" />
        <input type="hidden" name="idannonce" value="<?php echo $Annonce['id_annonce'] ?>"/> 
        <input type="submit"  value="Supprimer"  name="supression" />
    </form>
      </div>
      </div>
      </div>

    <?php
        }
      }
  }
    ?>
  </div> 
</div>