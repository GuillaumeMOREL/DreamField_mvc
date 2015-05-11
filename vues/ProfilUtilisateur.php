

    <?php

    $reponse = $bdd->query('SELECT nom, prenom, adresse, codepost, mail, tel FROM utilisateur WHERE utilisateur=\'Patrick\'');
  
    while ($donnees = $reponse->fetch())
     {
       echo 'NOM'. $donnees['nom'] . ' PRENOM ' . $donnees['prenom'] . 'ADRESSE' . $donnees['adresse'] . $donnees['codepost'] . 'ADRESSE EMAIL' . $donnees['mail'] . 'TEL' . $donnees['tel'] ;
     }
     $reponse->closeCursor();
   ?>
   