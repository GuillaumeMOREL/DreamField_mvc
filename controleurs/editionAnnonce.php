<?php
require_once('modeles/function_editionAnnonce.php');

  //on fait une condition pour plus de sécurité
  if(isset($_SESSION['id']))
{
   $req= $bdd-> prepare('SELECT * FROM annonces, utilisateurs WHERE id_vendeur = I_D AND I_D = ?');
  $req->execute(array($_SESSION['id']));
  $result = $req->fetch();
  
   if(isset($_POST['newnbPoidsQuant']) AND !empty($_POST['newnbPoidsQuant']) AND $_POST['newnbPoidsQuant'] != $result['nbPoidsQuant'] OR isset($_POST['newPoidsQuant']) AND !empty($_POST['newPoidsQuant']) AND $_POST['newPoidsQuant'] != $result['PoidsQuant'] OR isset($_POST['newremarque']) AND !empty($_POST['newremarque']) AND $_POST['newremarque'] != $result['remarque'] 
       OR isset($_POST['newprix']) AND !empty($_POST['newprix']) AND $_POST['newprix'] != $result['prix'] OR isset($_POST['newtroc']) AND !empty($_POST['newtroc']) AND $_POST['newtroc'] != $result['troc'] )
   {
       $newnbPoidsQuant = htmlspecialchars($_POST['newnbPoidsQuant']);
       $newnbPoidsQuant = htmlspecialchars($_POST['newPoidsQuant']);
       $newremarque = htmlspecialchars($_POST['newremarque']);
       $newprix = htmlspecialchars($_POST['newprix']);
       $newtroc = htmlspecialchars($_POST['newtroc']);
      $insert = $bdd-> prepare('UPDATE annonces, utilisateurs SET nbPoidsQuant= ?, PoidsQuant= ?, remarque= ?, prix= ?, troc= ? WHERE id_vendeur = I_D AND I_D = ?');
      $insert->execute(array($newnbPoidsQuant, $newPoidsQuant, $newremarque, $newprix, $newtroc, $_SESSION['id']));
   }


// Si Je le fais il faut changer le modele et faire une fct pour chaque envoi
/*
    if(isset($_POST['newnbPoidsQuant']) AND !empty($_POST['newnbPoidsQuant']))
    {  
      $newnbPoidsQuant != 0;
     //on vérifie que la quantité est pas de 0
      if($newnbPoidsQuant != 0)
       {
        $insertpass = $bdd-> prepare('UPDATE utilisateurs SET pass= ? WHERE I_D = ?');
      $insertnbPoidsQuant->execute(array($newnbPoidsQuant, $_SESSION['id']));
      header('Location: index.php?page=ProfilUtilisateur&id='.$_SESSION['id']);
    
      }
      else
      {
         $msg = "Veuillez ajouter une quantité";
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
    */
}
// si on ne s'est pas connécté on est redirigé sur la page de connexion
  else
  {
    header("Location: index.php?page=connexion");
  }
  
require('vues/editionAnnonce.php');
?>