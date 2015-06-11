<div id="newprofil_editionprofil" >
  <div id="newprofil-bis_editionprofil">
    <form id="newform" method="post" action="" enctype="multipart/form-data">
   
    <p>
              <label for="newnbPoidsQuant">Inscrivez le poids ou la quantité de votre denrée</label><br /><br />
              <input onclick='return verifRange();' id="range" type="range" name="newnbPoidsQuant" min="0" max="100" value="0" oninput="document.getElementById('AfficheRange').textContent=value" />
              <span id="AfficheRange">0</span>
              <br />
              <br />
              <select name="newPoidsQuant" id="newPoidsQuant" onclick='return verifPoidsQuant();' class="depot">
              <option value="AucuneUnite"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']=="AucuneUnite"){echo "selected";}  ?>>Selectionner l'unité</option>
              <optgroup label="Poids">
                  <option value="mg" <?php if (isset($_POST['newPoidsQuant']) && $_POST['newPoidsQuant']== "mg"){echo "selected";} ?>>mg</option>
                  <option value="g" <?php if (isset($_POST['newPoidsQuant']) && $_POST['newPoidsQuant']== "g"){echo "selected";} ?>>g</option>
                  <option value="kg" <?php if (isset($_POST['newPoidsQuant']) && $_POST['newPoidsQuant']== "kg"){echo "selected";} ?>>kg</option>
              </optgroup>
                   <optgroup label="Quantité" >
                    <option value="unite" <?php if (isset($_POST['newPoidsQuant']) && $_POST['newPoidsQuant']== "unite"){echo "selected";} ?>>Unité(s)</option>
              </optgroup>
              </select>
              <br />
              <br />
              <label for="newremarque">Ajouter une remarque/description sur votre produit</label><br /><br />
              <textarea name="newremarque" id="remarque"></textarea>
              <br />
              <br />
              <label for="newprix" class="choix"> Prix (€): </label>
              <input type="number" name="newprix" id="prix" onclick='return verifPrix();' min="0" class="choix" value="<?php if (isset($_POST['newprix'])) echo $_POST['newprix']; ?>"/>
              <br />
              <br />
              <label for="newtroc">Préciser si vous souhaitez échanger ou non votre produit contre une autre denrée indiquez le produit désiré:          </label>
              <br />
              <br />
              <input type="text" name="newtroc" id="troc" onclick='return verifTroc();' class="depot" placeholder="Ex : Ouvert à toutes propositions" size="30" value="<?php if (isset($_POST['newtroc'])) echo $_POST['newtroc']; ?>"/>


      <div class="modif">
          <label for="modificationAnnonce">Validez les modifications faites :</label>
          <input class="input_editionprofil" id="modificationAnnonce" type="button" name="modificationAnnonce" value="Mettre à jour mon annonce" />
      </div>

    </form>

        <?php if(isset($msg)) { echo $msg; } ?>
  </div>
</div>