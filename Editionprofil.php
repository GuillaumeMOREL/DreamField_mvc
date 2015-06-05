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
  //on fait une condition pour plus de sécurité
  if(isset($_SESSION['id']))
{

  $req= $bdd-> prepare('SELECT * FROM utilisateurs WHERE I_D= ?');
  $req->execute(array($_SESSION['id']));
  $result = $req->fetch();

   if(isset($_POST['newadresse']) AND !empty($_POST['newadresse']) AND $_POST['newadresse'] != $result['adresse'] OR isset($_POST['newnumero_departement']) AND !empty($_POST['newnumero_departement']) AND $_POST['newnumero_departement'] != $result['numero_departement'] OR isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $result['mail'] 
       OR isset($_POST['newtel']) AND !empty($_POST['newtel']) AND $_POST['newtel'] != $result['tel'] )
   {
       $newadresse = htmlspecialchars($_POST['newadresse']);
       $newnumero_departement = htmlspecialchars($_POST['newnumero_departement']);
       $newmail = htmlspecialchars($_POST['newmail']);
       $newtel = htmlspecialchars($_POST['newtel']);

      $insert = $bdd-> prepare('UPDATE utilisateurs SET adresse= ?, numero_departement= ?, mail= ?, tel= ? WHERE I_D = ?');
      $insert->execute(array($newadresse, $newnumero_departement, $newmail, $newtel, $_SESSION['id']));
   }

   if(isset($_POST['newpass']) AND !empty($_POST['newpass']) AND   isset($_POST['newpassverif']) AND !empty($_POST['newpassverif']))
    {  
      $newpassverif = sha1($_POST['newpassverif']);
      $newpass      = sha1($_POST['newpass']);
     //on vérifie si les deux mots de passes sont identiques
      if($newpassverif == $newpass)
       {
        $insertpass = $bdd-> prepare('UPDATE utilisateurs SET pass= ? WHERE I_D = ?');
      $insertpass->execute(array($newpass, $_SESSION['id']));

      header('Location: index.php?page=ProfilUtilisateur&id='.$_SESSION['id']);
    
      }
      else
      {
         $msg = "vos deux mots de passe ne correspondent pas";
      }

    }
   
    // ajouter l'avatar 
     if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
     {
        $tailleMax = 2097152;//c'est 2 MO en pixels.on fixe la taille de la photo;

        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');//cest un tableau de vérification des photos;

        if($_FILES['avatar']['size'] <= $tailleMax)
        {
           $extensionUpload =strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));

           //strrchr permet de recupérer l'extension de la photo envoyé qui sera pris avec le point. la fonctionsubstr permet de supprimer le point et strolower permet d'ecrire tout en miniscule.

           if(in_array($extensionUpload, $extensionsValides))
           {
            // on créé le chemin où sera récupérer notre photo.

              $chemin = "avatar/".$_SESSION['id'].".".$extensionUpload;

              // on crée une fonction toute simple qui permet de déplacer la photo qu'on vient de télécharger.

              $resultat =move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
              if($resultat)
              {
                 $updateavatar = $bdd->prepare('UPDATE utilisateurs SET photo_profil = :photo_profil WHERE I_D = :I_D');
                 $updateavatar->execute(array('photo_profil' => $_SESSION['id'].".".$extensionUpload, 'I_D' => $_SESSION['id']));
                 header('Location: index.php?page=ProfilUtilisateur&id='.$_SESSION['id']);

              }
              else
              {
                $msg = "erreur durant l'importation de votre profil!";
              }
           }
           else
           {
            $msg = "Votre photo de profil doit etre au format jpg, jpeg, gif ou png";
           }
        }
        else
        {
          $msg = "Votre photo ne doit pas dépasser 2MO";
        }

     }
    if(isset($_POST['newadresse']) AND $_POST['newadresse']== $result['adresse'] OR isset($_POST['newnumero_departement']) AND $_POST['newnumero_departement'] == $result['numero_departement'] OR isset($_POST['newmail']) AND $_POST['newmail'] == $result['mail'] OR isset($_POST['newtel']) AND $_POST['newtel'] == $result['tel'] OR isset($_FILES['avatar']))
    {
      header('Location: index.php?page=ProfilUtilisateur&id='.$_SESSION['id']);
    }

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />   
<title> DREAMFIELD</title>
</head>
  <body>
    <header>
      <?php include("vues/header.php"); ?>
    </header>
<br /><br />
<body>
  <div class="newprofil" align ="center">
  <form id="newform" method="post" action="" enctype="multipart/form-data">
   
   <p>

              <label for="newadresse">Adresse :</label>
              <input type="text" name="newadresse" id="newadresse" class="newchamp" size="30" placeholder="Ex :2 bis rue du long des bois" value="<?php echo $result['adresse']; ?>" />
              <br />
              <br />
              <label for="newnumero_departement"> num&eacute;ro d&eacute;partement :</label>
              <input type="number" name="newnumero_departement" id="newnumero_departement" class="newchamp" placeholder="Ex : 78" value="<?php echo $result['numero_departement']; ?>" min="01" max="95"/>
              <br />
              <br />
              <label for="newmail"> Email :</label>
              <input type="email" name="newmail" id="newmail" class="newchamp" size="30" placeholder="Ex :azerty@gmail.com " value="<?php echo $result['mail']; ?>" />
              <br />
              <br />
              <label class="newgrand" for="newtel"> Numero de telephone :</label>
              <input type="tel" name="newtel" id="newtel" value="<?php echo $result['tel']; ?>" maxlength="10" minlength="10"/>
              <br />
              <br />
              <label class="newgrand" for="newpass">Mot de passe :</label>
              <input type="password" name="newpass" id="newpass" class="newchamp" minlength="6" />
              <br />
              <br />
              <label class="newgrand" for="newpassverif">Confirmez votre mot de passe :</label>
              <input type="password" name="newpassverif" id="newpassverif" class="newchamp" minlength="6"/>
              <br />
              <br />
              <label> Avatar :</label>
              <input type="file" name="avatar" />
              <br />
              <br />
      <div class="modif">
          <label for="modification">Validez les modifications faites :</label>
          <input id="modification" type="submit" name="modification" value="Mettre à jour mon profil" />
      </div>
        </form>
        <?php if(isset($msg)) { echo $msg; } ?>      
</div>
    <footer>
      <?php include("vues/footer.php"); ?>
    </footer>  
   </body>
</html>
<?php
}
// si on ne s'est pas connécté on est redirigé sur la page de connexion
  else
  {
    header("Location: index.php?page=connexion");
  }
?>