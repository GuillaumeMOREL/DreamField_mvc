

<div id="milieu">
<div class="formulaire-ins">
<p id="formulaire-ins-titre">Pour vous inscrire, remplissez ce formulaire:</p>
<?php
/*if ($_GET['error'] AND $_GET['error'] = 'empty') {
  echo'tous les champs ne sont pas remplis';
   }
elseif ($_GET['error'] AND $_GET['error'] = 'existe'){
  echo'cet e-mail est deja pris.Veuillez en choisir un autre';
}
else ($_GET['error'] AND $_GET['error'] = 'different'){
 echo'vous avez entrez des e-mails différents';
}--je voulais mettre l'erreur sur la feuille mais j'y arrive pas */
?>
  <div class=""><p class="parcourir" > Ajouter une photo de profil (JPG, PNG ou GIF | max. 15 Ko) :</p>
    <form class="parcourir" method="post" action="?page=photo" enctype="multipart/form-data" >
      <input type="file" name="photo" id="photo" />
  </form></div>

  <form id="form" method="post" action="register_inscription.php">
    <p>
              <label for="prenom">Prénom :</label>
              <input type="text" name="prenom" id="prenom" class="champ" placeholder="Ex : Guillaume" size="30" maxlength="10" />
              <br />
              <br />
              <label for="nom">Nom :</label>
              <input type="text" name="nom" id="nom" class="champ" placeholder="Ex : MOREL" size="30" maxlength="10" />
              <br />
              <br />
              <label for="adresse">Adresse :</label>
              <input type="text" name="adresse" id="adresse" class="champ" size="30" placeholder="Ex :2 bis rue du long des bois"/>
              <br />
              <br />
              <label for="codepost"> Code postal :</label>
              <input type="number" name="codepost" id="codepost" class="champ" placeholder="Ex : 78690" min="10000" max="96000"/>
              <br />
              <br />
              <label for="ville">  Ville :</label>
              <input type="text" name="ville" id="ville" class="champ" placeholder="Ex :Saint-Louis "  size="30" />
              <br />
              <br />
              <label for="mail"> Email :</label>
              <input type="email" name="mail" id="mail" class="champ" size="30" placeholder="Ex :azerty@gmail.com  " />
              <br />
              <br />
              <label class="grand" for="tel"> Numero de telephone :</label>
              <input type="tel" name="tel" id="tel" maxlength="10" minlength="10"/>
              <br />
              <br />
              <label class="grand" for="pass">Mot de passe :</label>
              <input type="password" name="pass" id="pass" class="champ" minlength="6" /input>
              <br />
              <br />
              <label class="grand" for="passverif">Confirmez votre mot de passe :</label>
              <input type="password" name="passverif" id="passverif" class="champ" minlength="6"/>
              <br />
              <br />
              <label class="grand" for="conditions">J'accepte les <a href="" id="cond-uti">conditions d'utilisations</a></label>
              <input type="checkbox" name="conditions" id="conditions" class="champ"/>
              <br />
              <br />

        <div class="valider">
          <p>Appuyez sur valider pour confirmer l'inscription</p>
          <input id="validation-ins" type="submit" name="valider" value="Valider l'inscription" />
          <input type="reset" id="rafraichir" value="Rafraîchir" />
        </div>
    </p>
  </form>
</div>
 
</div>

