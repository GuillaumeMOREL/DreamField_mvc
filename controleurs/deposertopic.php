<?php

  $req = $bdd->prepare('INSERT INTO forum(titre, username, question, date_de_publication) VALUES(:titre, :username, :contenu, NOW())'); 

  $req->execute(array(
        'titre' => $_POST['titre'],
        'username' => $_POST['username'],
        'contenu' => $_POST['contenu']));

header('Location: index.php?page=forum');
require('vues/deposertopic.php');

?>