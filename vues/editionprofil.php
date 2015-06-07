<div id="newprofil_editionprofil" >
  <div id="newprofil-bis_editionprofil">
    <form id="newform" method="post" action="" enctype="multipart/form-data">
   
    <p>

              <label for="newadresse" class="label_editionprofil">Adresse :</label>
              <input class="input_editionprofil" type="text" name="newadresse" id="newadresse" placeholder="Ex :2 bis rue du long des bois" value="<?php echo $result['adresse']; ?>" />
              <br />
              <br />
              <label for="newnumero_departement" class="label_editionprofil"> Num&eacute;ro d&eacute;partement :</label>
              <input class="input_editionprofil" type="number" name="newnumero_departement" id="newnumero_departement" placeholder="Ex : 78" value="<?php echo $result['numero_departement']; ?>" min="01" max="95"/>
              <br />
              <br />
              <label for="newmail" class="label_editionprofil"> Email :</label>
              <input class="input_editionprofil" type="email" name="newmail" id="newmail" placeholder="Ex :azerty@gmail.com " value="<?php echo $result['mail']; ?>" />
              <br />
              <br />
              <label  for="newtel" class="label_editionprofil"> Numero de telephone :</label>
              <input class="input_editionprofil" type="tel" name="newtel" id="newtel" value="<?php echo '0'.$result['tel']; ?>" maxlength="10" minlength="10"/>
              <br />
              <br />
              <label  for="newpass" class="label_editionprofil">Mot de passe :</label>
              <input class="input_editionprofil" type="password" name="newpass" id="newpass"  minlength="6" />
              <br />
              <br />
              <label  for="newpassverif" class="label_editionprofil">Confirmez votre mot de passe :</label>
              <input class="input_editionprofil" type="password" name="newpassverif" id="newpassverif"  minlength="6"/>
              <br />
              <br />
              <label class="label_editionprofil"> Avatar :</label>
              <input class="input-bis_editionprofil" type="file" name="avatar" />
              <br />
              <br />

      <div class="modif">
          <label for="modification">Validez les modifications faites :</label>
          <input class="input_editionprofil" id="modification" type="submit" name="modification" value="Mettre à jour mon profil" />
      </div>

    </form>

        <?php if(isset($msg)) { echo $msg; } ?>
  </div>
</div>

