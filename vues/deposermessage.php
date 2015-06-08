<?php

  $req = $bdd->prepare('INSERT INTO commentaires(titre, id_sujet, username, contenu, date_de_publication) VALUES(:titre, :id_sujet, :username, :contenu, NOW())'); 

  $req->execute(array(
        'titre' => $_POST['titre'],
        'id_sujet' => $_GET['id'],
        'username' => $_POST['username'],
        'contenu' => $_POST['contenu']));

$id=$_GET['id'];
header('Location: index.php?page=sujet&id='.$id);

?>
