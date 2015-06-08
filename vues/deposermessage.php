<?php

  $req = $bdd->prepare('INSERT INTO commentaires(titre, id_sujet, username, contenu) VALUES(:titre, :id_sujet, :username, :contenu)'); 

  $req->execute(array(
        'titre' => $_POST['titre'],
        'id_sujet' => $_GET['id'],
        'username' => $_POST['username'],
        'contenu' => $_POST['contenu']));
$id=$_GET['id'];
header('Location: index.php?page=sujet&id='.$id);

?>
