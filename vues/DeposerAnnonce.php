<div class="formulaire-depot">
<p id="formulaire-depot-titre">Afin de déposer une annonce, remplissez ce formulaire:
 <br />
            <br />
 
     <?php
if (isset($_GET['mess'])) 
{
   
  echo $_GET['mess'];
}
?> 
     
</p>
 <br />
            <br />
 
  <div class=""><p class="parcourir" > Ajouter une photo de votre denrée (JPG, PNG ou GIF | max. 1 Mo) :</p>
    <form class="parcourir" method="post" action="photo.php" enctype="multipart/form-data" >
      <input type="file" name="photo" id="photo" />
  </form></div>
 
  <form id="form" method="post" action="?page=deposerAnnonce">
    <p>
               
            <label for="nom_produit">Selectionnez le nom de votre denrée</label><br/><br />
 
    <select name="nom_produit" id="nom_produit" onchange='changeAutre()' class="depot">
              <optgroup label="Autre">
                   <option value="AutreAliment" <?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "AutreAliment"){echo "selected";} ?>>Autre</option>
              </optgroup>
 
              <optgroup label="Fruits">
                <?php
 
while ($donneesfruit = $fruit->fetch())
 
{
 
?>
                   <option value="<?php echo $donneesfruit['nom_produit'] ?>"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== $donneesfruit['nom_produit'] ){echo "selected";} ?>> <?php echo $donneesfruit['nom_produit']; ?> </option>
                   <?php
 
          }
          $fruit->closeCursor(); // Termine le traitement de la requête
          ?>
 
              </optgroup>
 
 
              <optgroup label="Légumes">
                <?php
 
while ($donneeslegume = $legume->fetch())
 
{
 
?>
                   <option value="<?php echo $donneeslegume['nom_produit'] ?>"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== $donneeslegume['nom_produit'] ){echo "selected";} ?>> <?php echo $donneeslegume['nom_produit']; ?> </option>
                   <?php
 
          }
          $legume->closeCursor(); // Termine le traitement de la requête
          ?>
 
              </optgroup>
  </select>
 
 
            
 
            <br />
            <br />
 
            
            <div id="aCacher">
            <label for="ProduitAutre">Si vous avez sélectionné "Autre", merci de nous indiquer ci dessous le nom de votre denrée</label><br /><br />
            <input type="text" name="ProduitAutre" id="ProduitAutre" size="30" maxlength="20"  value="<?php if (isset($_POST['ProduitAutre'])) echo $_POST['ProduitAutre']; ?>" class="depot"/>
            </div>
 
 
              <br />
              <br />
              <label for="nbPoidsQuant">Inscrivez le poids ou la quantité de votre denrée</label><br /><br />
              <input onclick='return verifRange();' id="range" type="range" name="nbPoidsQuant" min="0" max="100" value="0" oninput="document.getElementById('AfficheRange').textContent=value" />
              <span id="AfficheRange">0</span>
 
 
               
 
              <select name="PoidsQuant" id="PoidsQuant" onclick='return verifPoidsQuant();' class="depot">
              <option value="AucuneUnite"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']=="AucuneUnite"){echo "selected";}  ?>>Selectionner l'unité</option>
              <optgroup label="Poids">
                  <option value="mg" <?php if (isset($_POST['PoidsQuant']) && $_POST['PoidsQuant']== "mg"){echo "selected";} ?>>mg</option>
                  <option value="g" <?php if (isset($_POST['PoidsQuant']) && $_POST['PoidsQuant']== "g"){echo "selected";} ?>>g</option>
                  <option value="kg" <?php if (isset($_POST['PoidsQuant']) && $_POST['PoidsQuant']== "kg"){echo "selected";} ?>>kg</option>
              </optgroup>
                   <optgroup label="Quantité" >
                    <option value="unite" <?php if (isset($_POST['PoidsQuant']) && $_POST['PoidsQuant']== "unite"){echo "selected";} ?>>Unité(s)</option>
              </optgroup>
              </select>
 
 
 
              <br />
              <br />
              <label for="date">Date d'expiration du produit<br/> <em>(AAAA/MM/JJ)</em> </label><br />
              <input type="date" name="dateexpiration" id="dateexpiration" onclick='return verifDate();' maxlength="10" minlength="10" placeholder="2015/12/15" class="depot" value="<?php if (isset($_POST['dateexpiration'])) echo $_POST['dateexpiration']; ?>"/>
              <br />
              <br />
              <label for="remarque">Ajouter une remarque/description sur votre produit</label><br /><br />
              <textarea name="remarque" id="remarque"></textarea>
              <br />
              <br />
              <label for="prix" class="choix"> Prix (€): </label>
              <input type="number" name="prix" id="prix" onclick='return verifPrix();' min="0" class="choix" value="<?php if (isset($_POST['prix'])) echo $_POST['prix']; ?>"/>
              <div id="resultat" class="choix"></div>
              <br />
              <br />
              <label for="troc">Préciser si vous souhaitez échanger ou non votre produit contre une autre denrée indiquez le produit désiré:          </label>
              <br />
              <br />
              <input type="text" name="troc" id="troc" onclick='return verifTroc();' class="depot" placeholder="Ex : Ouvert à toutes propositions" size="30" value="<?php if (isset($_POST['troc'])) echo $_POST['troc']; ?>"/>
              
 
             
              <br />
              <br />
        <div class="valider">
 
 
          <p>Appuyez sur valider pour confirmer l'envoie de l'annonce.</p>
          <input id="validation-depot" type="submit" onclick='return verifChamps()' name="validerDepot" value="Envoyer l'annonce" />
 
          <input type="reset" id="rafraichirDepot" value="Rafraîchir" />
        </div>
 
    </p>
  </form>
 
</div>