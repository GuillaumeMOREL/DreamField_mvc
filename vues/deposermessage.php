<?php

  try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', 'root');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }


  $req = $bdd->prepare('INSERT INTO commentaires(titre, id_sujet, username, contenu) VALUES(:titre, :id_sujet, :username, :contenu)'); 

  $req->execute(array(
        'titre' => $_POST['titre'],
        'id_sujet' => $_GET['id'],
        'username' => $_POST['username'],
        'contenu' => $_POST['contenu']));
$id=$_GET['id'];
header('location:sujet.php?id='.$id);


?>
