<?php

  $req = $bdd->prepare('INSERT INTO forum(titre, username, question) VALUES(:titre, :username, :contenu)'); 

  $req->execute(array(
        'titre' => $_POST['titre'],
        'username' => $_POST['username'],
        'contenu' => $_POST['contenu']));

header('Location: index.php?page=forum');
?>