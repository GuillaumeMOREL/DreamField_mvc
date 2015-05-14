<div id="milieu_redirection">
<div class="formulaire-ins_redirection">
<div id="formulaire-ins-titre"><h4>Pour vous inscrire, remplissez ce formulaire:</h4></div>

  <div class="photo_redirection">
    <p class="parcourir" > Ajouter une photo de profil (JPG, PNG ou GIF | max. 15 Ko) :</p>
    <form class="parcourir" method="post" action="photo.php" enctype="multipart/form-data">
      <input type="file" name="photo" id="photo" />
    </form>
  </div>

  <form method="post" action="traitement.php" class="form_redirection">
    <p>
              <label for="prenom" class="label_redirection">Prénom :</label>
              <input type="text" name="prenom" id="prenom" class="champ-input_redirection" placeholder="Ex : Guillaume" size="30" maxlength="10" />
              <br />
              <br />
              <label for="nom" class="label_redirection">Nom :</label>
              <input type="text" name="nom" id="nom" class="champ-input_redirection" placeholder="Ex : MOREL" size="30" maxlength="10" />
              <br />
              <br />
              <label for="adresse" class="label_redirection">Adresse :</label>
              <input type="text" name="adresse" id="adresse" class="champ-input_redirection" size="30" placeholder="Ex :2 bis rue du long des bois"/>
              <br />
              <br />
              <label for="codepost" class="label_redirection"> Code postal :</label>
              <input type="number" name="codepost" id="codepost" class="champ-input_redirection" placeholder="Ex : 78690" min="10000" max="96000"/>
              <br />
              <br />
              <label for="ville" class="label_redirection">  Ville :</label>
              <input type="text" name="ville" id="ville" class="champ-input_redirection" placeholder="Ex :Saint-Louis "  size="30" />
              <br />
              <br />
              <label for="mail" class="label_redirection"> Email :</label>
              <input type="email" name="mail" id="mail" class="champ-input_redirection" size="30" placeholder="Ex :azerty@gmail.com  " />
              <br />
              <br />
              <label  for="tel" class="label_redirection" class="grand"> Numero de telephone :</label>
              <input type="tel" name="tel" id="tel" class="champ-input_redirection" maxlength="10" minlength="10"/>
              <br />
              <br />
              <label  for="pass" class="label_redirection" class="grand"> Mot de passe :</label>
              <input type="password" name="pass" id="pass" class="champ-input_redirection" minlength="6" />
              <br />
              <br />
              <label  for="passverif" class="label_redirection" class="grand">Confirmez votre mot de passe :</label>
              <input type="password" name="passverif" id="passverif" class="champ-input_redirection" minlength="6"/>
              <br />
              <br />
              <br />
              <label  for="conditions" class="label_redirection" class="grand">J'accepte les <a href="" id="cond-uti">conditions d'utilisations</a></label>
              <input type="checkbox" name="conditions" id="conditions" class="champ-input_redirection"/>
              <br />
              <br />

        <div class="valider">
          <p>Appuyez sur valider pour confirmer l'inscription</p>
          <br />
          <input class="validation-ins_redirection" type="submit" name="valider" value="Valider l'inscription" />
          <input class="validation-ins_redirection" type="reset" id="rafraichir" value="Rafraîchir" />
        </div>
    </p>
  </form>
</div>

  <div class="formulaire-co_redirection">

      <form method="post" action="traitement.php">
      <p>
                <label for="mail" class="champ-co_redirection" class="label_redirection"> Email :</label>
                <input type="email" name="mail" id="mail" class="champ-input_redirection" size="30" placeholder="Ex :azerty@gmail.com " />
                <br />
                <br />
                <label for="pass" class="champ-co_redirection" class="label_redirection" >Mot de passe :</label>
                <input type="password" name="pass" id="pass" class="champ-input_redirection" minlength="6" /input>
                <br />
                <br />
                <br />

          <div id="validation-co">
            <input type="submit" name="valider" value="Connexion" class="champ-input_redirection"/>
          </div>
      </p>
      </form>
  </div> 
</div>