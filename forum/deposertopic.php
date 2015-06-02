<?php
  try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }


  $req = $bdd->prepare('INSERT INTO forum(titre, username, question) VALUES(:titre, :username, :contenu)'); 

  $req->execute(array(
        'titre' => $_POST['titre'],
        'username' => $_POST['username'],
        'contenu' => $_POST['contenu']));

header('location:forum.php');
?>