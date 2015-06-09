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

<?php  
}
?> 

  </div> 
</div>
