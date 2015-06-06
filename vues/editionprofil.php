<div class="newprofil" align ="center">
    <form id="newform" method="post" action="" enctype="multipart/form-data">
   
    <p>

              <label for="newadresse">Adresse :</label>
              <input type="text" name="newadresse" id="newadresse" class="newchamp" size="30" placeholder="Ex :2 bis rue du long des bois" value="<?php echo $result['adresse']; ?>" />
              <br />
              <br />
              <label for="newnumero_departement"> Num&eacute;ro d&eacute;partement :</label>
              <input type="number" name="newnumero_departement" id="newnumero_departement" class="newchamp" placeholder="Ex : 78" value="<?php echo $result['numero_departement']; ?>" min="01" max="95"/>
              <br />
              <br />
              <label for="newmail"> Email :</label>
              <input type="email" name="newmail" id="newmail" class="newchamp" size="30" placeholder="Ex :azerty@gmail.com " value="<?php echo $result['mail']; ?>" />
              <br />
              <br />
              <label class="newgrand" for="newtel"> Numero de telephone :</label>
              <input type="tel" name="newtel" id="newtel" value="<?php echo '0'.$result['tel']; ?>" maxlength="10" minlength="10"/>
              <br />
              <br />
              <label class="newgrand" for="newpass">Mot de passe :</label>
              <input type="password" name="newpass" id="newpass" class="newchamp" minlength="6" />
              <br />
              <br />
              <label class="newgrand" for="newpassverif">Confirmez votre mot de passe :</label>
              <input type="password" name="newpassverif" id="newpassverif" class="newchamp" minlength="6"/>
              <br />
              <br />
              <label> Avatar :</label>
              <input type="file" name="avatar" />
              <br />
              <br />

      <div class="modif">
          <label for="modification">Validez les modifications faites :</label>
          <input id="modification" type="submit" name="modification" value="Mettre à jour mon profil" />
      </div>

    </form>

        <?php if(isset($msg)) { echo $msg; } ?>

</div>
