 <?php
session_start();
try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=DreamField', 'root', '');
  }
  catch (Exception $e)
  {
      die('Erreur : ' . $e->getMessage());
  }
  if(isset($_GET['id']) AND $_GET['id'] > 0)
     {
       $getid = intval($_GET['id']); 
       $requser = $bdd-> prepare('SELECT * FROM utilisateurs WHERE I_D = ?');
       $requser->execute(array($getid));
       $userinfo = $requser->fetch();
    
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />   
<link rel="Stylesheet" href="/css/membre.css" />
<title> DREAMFIELD</title>
</head>
  <body>
    <header>
      <?php include("include/header.php"); ?>
    </header>
<br /><br />
<body>
  <div class="profil" align ="center">
    <h3> Nom             : <?php echo $userinfo['nom']; ?></h3>
    <h3> Prénom          : <?php echo $userinfo['prenom']; ?></h3>
    <h3> Téléphone       : <?php echo $userinfo['tel']; ?></h3>
    <h3> Adresse         : <?php echo $userinfo['adresse']; ?></h3>
    <h3> Code postal     : <?php echo $userinfo['codepost']; ?></h3>
    <h3> E-mail          : <?php echo $userinfo['mail']; ?></h3>
    <br />
    <?php
    if(isset($_SESSION['id']) AND $userinfo['I_D'] == $_SESSION['id'])
    {
    ?>
    <a href ="Editionprofil.php"> Modifier mon profil </a>
    <br />
    <br />
    <a href="deconnexion.php"> Se déconnecter </a>
    <?php
    }
    ?>
</div>
    <footer>
      <?php include("include/footer.php"); ?>
    </footer>  
   </body>
</html>
<?php
  }
?>