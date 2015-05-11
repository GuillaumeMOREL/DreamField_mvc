<div id="milieu_redirection">
<div class="formulaire-ins_redirection">
<p id="formulaire-ins-titre">Pour vous inscrire, remplissez ce formulaire:</p>

  <div class=""><p class="parcourir" > Ajouter une photo de profil (JPG, PNG ou GIF | max. 15 Ko) :</p>
    <form class="parcourir" method="post" action="photo.php" enctype="multipart/form-data">
      <input type="file" name="photo" id="photo" />
  </form></div>

  <form method="post" action="traitement.php">
    <p>
              <label for="prenom" class="redirection-label">Prénom :</label>
              <input type="text" name="prenom" id="prenom" class="champ-input_redirection" placeholder="Ex : Guillaume" size="30" maxlength="10" />
              <br />
              <br />
              <label for="nom" class="redirection-label">Nom :</label>
              <input type="text" name="nom" id="nom" class="champ-input_redirection" placeholder="Ex : MOREL" size="30" maxlength="10" />
              <br />
              <br />
              <label for="adresse" class="redirection-label">Adresse :</label>
              <input type="text" name="adresse" id="adresse" class="champ-input_redirection" size="30" placeholder="Ex :2 bis rue du long des bois"/>
              <br />
              <br />
              <label for="codepost" class="redirection-label"> Code postal :</label>
              <input type="number" name="codepost" id="codepost" class="champ-input_redirection" placeholder="Ex : 78690" min="10000" max="96000"/>
              <br />
              <br />
              <label for="ville" class="redirection-label">  Ville :</label>
              <input type="text" name="ville" id="ville" class="champ-input_redirection" placeholder="Ex :Saint-Louis "  size="30" />
              <br />
              <br />
              <label for="mail" class="redirection-label"> Email :</label>
              <input type="email" name="mail" id="mail" class="champ-input_redirection" size="30" placeholder="Ex :azerty@gmail.com  " />
              <br />
              <br />
              <label  for="tel" class="redirection-label" class="grand"> Numero de telephone :</label>
              <input type="tel" name="tel" id="tel" maxlength="10" minlength="10"/>
              <br />
              <br />
              <label  for="pass" class="redirection-label" class="grand"> Mot de passe :</label>
              <input type="password" name="pass" id="pass" class="champ-input_redirection" minlength="6" />
              <br />
              <br />
              <label  for="passverif" class="redirection-label" class="grand">Confirmez votre mot de passe :</label>
              <input type="password" name="passverif" id="passverif" class="champ-input_redirection" minlength="6"/>
              <br />
              <br />
              <label  for="conditions" class="redirection-label" class="grand">J'accepte les <a href="" id="cond-uti">conditions d'utilisations</a></label>
              <input type="checkbox" name="conditions" id="conditions" class="champ-input_redirection"/>
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

  <div class="formulaire-co_redirection">

      <form method="post" action="traitement.php">
      <p>
                <label for="mail" class="champ-co_redirection" class="redirection-label"> Email :</label>
                <input type="email" name="mail" id="mail" class="champ-input_redirection" size="30" placeholder="Ex :azerty@gmail.com " />
                <br />
                <br />
                <label for="pass" class="champ-co_redirection" class="redirection-label" >Mot de passe :</label>
                <input type="password" name="pass" id="pass" class="champ-input_redirection" minlength="6" /input>
                <br />
                <br />

          <div id="validation-co">
            <input type="submit" name="valider" value="Connexion" class="champ-input_redirection"/>
          </div>
      </p>
      </form>
  </div> 
</div>