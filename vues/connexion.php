  <div class="milieu_connexion">

    <div class="formulaire_connexion">

      <form id="form_connexion" method="post" action="identifiants.php">
        <p>
          <label for="mail" class="label_connexion"> Email :</label>
          <input type="email" name="mail" id="mail_connexion" class="champ_input_connexion" size="30" placeholder="Ex :azerty@gmail.com " />
          <br />
          <br />
          <br />
          <label for="pass" class="label_connexion" >Mot de passe :</label>
          <input type="password" name="pass" id="pass_connexion" class="champ_input_connexion" minlength="6" />
          <br />
          <br />

            <div id="validation_connexion">
              <input type="submit" name="valider" value="Connexion" class="champ_input_connexion" />
            </div>
            
        </p>
      </form>
    </div> 
  </div>

 
