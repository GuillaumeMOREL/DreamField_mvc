<div class="milieu_connexion">

    <div class="formulaire_connexion">

      <form id="form_connexion" method="post" action="?page=connexion">
        
        <p>

<?php
  if (isset($_GET['message'])) 
     {
       echo $_GET['message'];
     }
?>
 
<br />
<br />
          <label for="mail" class="label_connexion" class="champ" id="mail"> Email :</label>
          <input type="email" name="mailconnect" id="mail" class="champ_input_connexion" class="champ" size="30" placeholder="Ex :azerty@gmail.com " />
          <br />
          <br />
          <br />
          <label for="pass" class="label_connexion" class="champ" id="pass">Mot de passe :</label>
          <input type="password" name="passconnect" id="pass" class="champ_input_connexion" class="champ" minlength="6" />
          <br />
          <br />
          <br />
          
            <div id="validation_connexion">
              <input type="submit" name="formconnexion" value="Connexion" class="champ_input_connexion" class="validation"/>
            </div>
            
        </p>
      </form>
    </div> 
  </div>
  