 <?php
    if(empty($userinfo['avatar']))
    {
    ?>
    <img src="avatar/<?php echo $userinfo['photo_profil']; ?>" />
    <?php
    }
    else
    {
    ?>
    <img src="avatar/default.jpg/<?php echo $userinfo['photo_profil']; ?>" />
    <?php
    }
    ?>
  <div class="profil" align ="center">
    <h3> Nom             : <?php echo $userinfo['nom']; ?></h3>
    <h3> Prénom          : <?php echo $userinfo['prenom']; ?></h3>
    <h3> Téléphone       : <?php echo '0'.$userinfo['tel']; ?></h3>
    <h3> Adresse         : <?php echo $userinfo['adresse']; ?></h3>
    <h3> Numero de departement     : <?php echo $userinfo['numero_departement']; ?></h3>
    <h3> E-mail          : <?php echo $userinfo['mail']; ?></h3>

    <br />
   <?php
    if(isset($_SESSION['id']) AND $userinfo['I_D'] == $_SESSION['id'])
    {
    ?> 
    <div id="editionprofil">
      <a href ="index.php?page=editionprofil"> Modifier mon profil </a>
    </div>
    <br />
    <br />
    <a href="index.php?page=Deconnexion"> Se déconnecter </a>
  <?php  
    }
    ?> 
</div> 
?>

