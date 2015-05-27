<div id="milieu_inscription">
<div class="formulaire_inscription">
<div class="photo_inscription">
    <p class="parcourir" > Ajouter une photo de profil (JPG, PNG ou GIF | max. 15 Ko) :</p>
    <form class="parcourir" method="post" action="" enctype="multipart/form-data" >
      <input type="file" name="photo" id="photo" />

<!-- <?php
if (isset($_GET['msg'])) 
{
  echo $_GET['msg'];
}
?> -->
</form> </div>
  <form method="post" action="?page=inscription">
  <!--  <form method="post" action="?page=register_inscription"> -->
    <p>
              <label for="prenom" class="label_inscription">Prénom :</label>
              <input type="text" name="prenom" id="prenom" class="champ-input_inscription" class="champ" placeholder="Ex : Guillaume" size="30" maxlength="10" />
              <br />
              <br />
              <label for="nom" class="label_inscription">Nom :</label>
              <input type="text" name="nom" id="nom" class="champ-input_inscription" class="champ" placeholder="Ex : MOREL" size="30" maxlength="10" />
              <br />
              <br />
              <label for="adresse" class="label_inscription">Adresse :</label>
              <input type="text" name="adresse" id="adresse" class="champ-input_inscription" class="champ" size="30" placeholder="Ex :2 bis rue du long des bois"/>
              <br />
              <br />
              <label for="numero_departement" class="label_inscription"> Numéro du département :</label>
              <input type="number" name="numero_departement" id="numero_departement" class="champ-input_inscription" class="champ" laceholder="Ex : 78" min="01" max="95"/>
              <br />
              <br />
              <label for="mail" class="label_inscription"> Email :</label>
              <input type="email" name="mail" id="mail" class="champ-input_inscription" class="champ" size="30" placeholder="Ex :azerty@gmail.com  " />
              <br />
              <br />
              <label for="tel" class="label_inscription"> Numero de telephone :</label>
              <input type="tel" name="tel" id="tel" class="champ-input_inscription" class="champ" maxlength="10" minlength="10"/>
              <br />
              <br />
              <label for="pass" class="label_inscription">Mot de passe :</label>
              <input type="password" name="pass" id="pass" class="champ-input_inscription" class="champ" minlength="6" />
              <br />
              <br />
              <label for="passverif" class="label_inscription">Confirmez votre mot de passe :</label>
              <input type="password" name="passverif" id="passverif" class="champ-input_inscription" class="champ" minlength="6"/>
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
          <input class="validation_inscription" class="validation" type="submit" name="valider" value="Valider l'inscription" />
          <input class="validation_inscription" type="reset" class="rafraichir" value="Rafraîchir" />
        </div>
    </p>
  </form>
</div>
 
</div>
