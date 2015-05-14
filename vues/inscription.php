

<div id="milieu_inscription">
<div class="formulaire_inscription">
<div id="formulaire-titre_inscription"><h4>Pour vous inscrire, remplissez ce formulaire:</h4></div>
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
  <div class="photo_inscription">
    <p class="parcourir" > Ajouter une photo de profil (JPG, PNG ou GIF | max. 15 Ko) :</p>
    <form class="parcourir" method="post" action="?page=photo" enctype="multipart/form-data" >
      <input type="file" name="photo" id="photo" />
    </form>
  </div>

  <form method="post" action="register_inscription.php">
    <p>
              <label for="prenom" class="label_inscription">Prénom :</label>
              <input type="text" name="prenom" id="prenom" class="champ-input_inscription" placeholder="Ex : Guillaume" size="30" maxlength="10" />
              <br />
              <br />
              <label for="nom" class="label_inscription">Nom :</label>
              <input type="text" name="nom" id="nom" class="champ-input_inscription" placeholder="Ex : MOREL" size="30" maxlength="10" />
              <br />
              <br />
              <label for="adresse" class="label_inscription">Adresse :</label>
              <input type="text" name="adresse" id="adresse" class="champ-input_inscription" size="30" placeholder="Ex :2 bis rue du long des bois"/>
              <br />
              <br />
              <label for="codepost" class="label_inscription"> Code postal :</label>
              <input type="number" name="codepost" id="codepost" class="champ-input_inscription" placeholder="Ex : 78690" min="10000" max="96000"/>
              <br />
              <br />
              <label for="ville" class="label_inscription">  Ville :</label>
              <input type="text" name="ville" id="ville" class="champ-input_inscription" placeholder="Ex :Saint-Louis "  size="30" />
              <br />
              <br />
              <label for="mail" class="label_inscription"> Email :</label>
              <input type="email" name="mail" id="mail" class="champ-input_inscription" size="30" placeholder="Ex :azerty@gmail.com  " />
              <br />
              <br />
              <label for="tel" class="label_inscription"> Numero de telephone :</label>
              <input type="tel" name="tel" id="tel" class="champ-input_inscription" maxlength="10" minlength="10"/>
              <br />
              <br />
              <label for="pass" class="label_inscription">Mot de passe :</label>
              <input type="password" name="pass" id="pass" class="champ-input_inscription" minlength="6" />
              <br />
              <br />
              <label for="passverif" class="label_inscription">Confirmez votre mot de passe :</label>
              <input type="password" name="passverif" id="passverif" class="champ-input_inscription" minlength="6"/>
              <br />
              <br />
              <br />
              <label for="conditions" class="label_inscription">J'accepte les <a href="" id="cond-uti">conditions d'utilisations</a></label>
              <input type="checkbox" name="conditions" id="conditions" class="champ-input_inscription"/>
              <br />
              <br />

        <div class="valider">
          <p>Appuyez sur valider pour confirmer l'inscription</p>
          </br>
          <input class="validation_inscription" type="submit" name="valider" value="Valider l'inscription" />
          <input class="validation_inscription" type="reset" id="rafraichir" value="Rafraîchir" />
        </div>
    </p>
  </form>
</div>
 
</div>

