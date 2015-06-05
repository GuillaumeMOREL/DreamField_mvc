<?php

require("controleurs/database_connect.php");

  if(isset($_GET['id']) AND $_GET['id'] > 0)
     {
       $getid = intval($_GET['id']); 
       $requser = $bdd-> prepare('SELECT * FROM utilisateurs WHERE I_D = ?');
       $requser->execute(array($getid));
       $userinfo = $requser->fetch();
    
?>  
<?php
    if(!empty($userinfo['photo_profil']))
    {
    ?>
    <img src="avatar/<?php echo $userinfo['photo_profil']; ?>" width="250" />
    <?php
    }
    ?>
<br />
<br />
<br />
<br />
<br />
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
      <a href ="?page=editionprofil"> Modifier mon profil </a>
    </div>
    <br />
    <br />
    <a href="?page=Deconnexion"> Se déconnecter </a>
  <?php  
    }
    ?> 
</div> 

<?php
  }
?>

