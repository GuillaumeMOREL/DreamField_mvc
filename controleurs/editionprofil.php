<?php
/*require('modeles/function_editionprofil.php');*/
session_start();
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
         $msg = "Vos deux mots de passe ne correspondent pas";
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
                $msg = "Erreur durant l'importation de votre profil!";
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
}
// si on ne s'est pas connécté on est redirigé sur la page de connexion
  else
  {
    header("Location: index.php?page=connexion");
  }
require('vues/editionprofil.php');
?>