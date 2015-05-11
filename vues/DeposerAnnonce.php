<div class="formulaire-depot">
<p id="formulaire-depot-titre">Afin de déposer une annonce, remplissez ce formulaire:</p>

  <div class=""><p class="parcourir" > Ajouter une photo de votre denrée (JPG, PNG ou GIF | max. 15 Ko) :</p>
    <form class="parcourir" method="post" action="?page=photo" enctype="multipart/form-data" >
      <input type="file" name="photo" id="photo" />
  </form></div>

  <form id="form" method="post" action="acceuil_final.php">
    <p>
              Choisissez le type du produit:
              
              <input type="radio" name="type" value="fruit" id="fruit" /><label for="fruit">fruit</label>
              
              <input type="radio" name="type" value="legume" id="legume" /><label for="legume">légume</label>

              <input type="radio" name="type" value="féculent" id="féculent" /><label for="legume">féculent</label>
              <br />
              <br />

              <label for="NomProduit">Selectionnez le nom de votre denrée</label><br /><br />
           
            <select name="NomProduit" id="NomProduit">

              <optgroup label="Autre">
                    <option value="AutreAliment">Autre</option>
              </optgroup>


              <optgroup label="Féculents">
                  <option value="fève">Fève</option>
                  <option value="haricot blanc">Haricot blanc</option>
                  <option value="haricot rouge">Haricot rouge</option>
                  <option value="patate douce">Patate douce</option>
                  <option value="pomme de terre">Pomme de terre</option>
              </optgroup>

              <optgroup label="Fruits">

                   <option value="abricot">Abricot</option>
                   <option value="amande">Amande</option>
                   <option value="ananas">Ananas</option>
                   <option value="aronia">Aronia</option>
                   <option value="avocat">Avocat</option>
                   <option value="banane">Banane</option>
                   <option value="cacao">Cacao</option>
                   <option value="canneberge">Canneberge</option>
                   <option value="carambole">Carambole</option>
                   <option value="cassis">Cassis</option>
                   <option value="cerise">Cerise</option>
                   <option value="citron">Citron</option>
                   <option value="clementine">Clémentine</option>
                   <option value="coing">Coing</option>
                   <option value="corme">Corme</option>
                   <option value="corossol">Corossol</option>
                   <option value="curuba">Curuba</option>
                   <option value="datte">Datte</option>
                   <option value="figue">Figue</option>
                   <option value="fraise">Fraise</option>
                   <option value="framboise">Framboise</option>
                   <option value="fruit de la passion">Fruit de la passion</option>
                   <option value="goyave">Goyave</option>
                   <option value="grenade">Grenade</option>
                   <option value="grenadelle">Grenadelle</option>
                   <option value="groseille">Groseille</option>
                   <option value="jujube">Jujube</option>
                   <option value="kaki">Kaki</option>
                   <option value="kiwai">Kiwai</option>
                   <option value="kiwano">Kiwano</option>
                   <option value="kiwi">Kiwi</option>
                   <option value="litchi">Litchi</option>
                   <option value="mandarine">Mandarine</option>
                   <option value="mangue">Mangue</option>
                   <option value="mûre">Mûre</option>
                   <option value="myrtille">Myrtille</option>
                   <option value="nèfle">Nèfle</option>
                   <option value="noisette">Noisette</option>
                   <option value="noix">Noix</option>
                   <option value="noix de cajou">Noix de cajou</option>
                   <option value="noix de coco">Noix de coco</option>
                   <option value="olive">Olive</option>
                   <option value="orange">Orange</option>
                   <option value="pamplemousse">Pamplemousse</option>
                   <option value="papaye">Papaye</option>
                   <option value="pastèque">Pastèque</option>
                   <option value="pêche">Pêche</option>
                   <option value="pistache">Pistache</option>
                   <option value="poire">Poire</option>
                   <option value="pomme">Pomme</option>
                   <option value="pomme de cythère">Pomme de cythère</option>
                   <option value="prune">Prune</option>
                   <option value="prunelle">Prunelle</option>
                   <option value="Raisin">Raisin</option>
                </optgroup>


                <optgroup label="Légumes">
                   <option value="ail">Ail</option>
                   <option value="asperge">Asperge</option>
                   <option value="aubergine">Aubergine</option>
                   <option value="betterave">Betterave</option>
                   <option value="brocoli">Brocoli</option>
                   <option value="carotte">Carotte</option>
                   <option value="céléri-rave">Céléri-rave</option>
                   <option value="champignons">Champignon</option>
                   <option value="chou blanc">Chou blanc</option>
                   <option value="choux chinois">Chou chinois</option>
                   <option value="choux de bruxelle">Choux de Bruxelle</option>
                   <option value="choux de milan">Choux de Milan</option>
                   <option value="choux-fleur">Choux fleur</option>
                   <option value="chou romanesco">Choux romanesco</option>
                   <option value="choux vert">Choux vert</option>
                   <option value="ciboulette">Ciboulette</option>
                   <option value="citrouille">Citrouille</option>
                   <option value="concombre">Concombre</option>
                   <option value="cornichon">Cornichon</option>
                   <option value="courgette">Courgette</option>
                   <option value="échalote">Échalote</option>
                   <option value="épinard">Épinard</option>
                   <option value="gingembre">Gingembre</option>
                   <option value="haricot vert">Haricot vert</option>
                   <option value="laitue">Laitue</option>
                   <option value="mâche">Mâche</option>
                   <option value="maïs">Maïs</option>
                   <option value="melon">Melon</option>
                   <option value="navet">Navet</option>
                   <option value="oignon">Oignon</option>
                   <option value="petit pois">Petits pois</option>
                   <option value="piment">Piment</option>
                   <option value="poireau">Poireau</option>
                   <option value="poivron">Poivron</option>
                   <option value="potimarron">Potimarron</option>
                   <option value="potiron">Potiron</option>
                   <option value="radis">Radis</option>
                   <option value="roquette">Roquette</option>
                   <option value="tomate">Tomate</option>
              </optgroup>
              
            </select>

            <br />
            <br />



            <label for="ProduitAutre">Si vous avez sélectionné "Autre", merci de nous indiquer ci dessous le nom de votre denrée</label><br /><br />
            <input type="text" name="ProduitAutre" id="ProduitAutre" size="30" maxlength="20" />


              <br />
              <br />
              <label for="NomProduit">Inscrivez le poids ou la quantité de votre denrée</label><br /><br />
              <input type="range" min="1" max="100" value="0" oninput="document.getElementById('AfficheRange').textContent=value" />
              <span id="AfficheRange">0</span>


              <select name="PoidsQuant" id="PoidsQuant">
              <optgroup label="Poids">
                  <option value="mg">mg</option>
                  <option value="g">g</option>
                  <option value="kg">Kg</option>
              </optgroup>
                   <optgroup label="Quantité" >
                   <option value="quantite"> Sans Unité </option>    
              </optgroup>
              </select>

              
              <br />
              <br />
               <label for="remarque">Date d'expiration du produit<br/> <h6>(JJ/MM/AAAA)</h6> </label><br />
               <input type="date" />
              <br />
              <br />
              <label for="remarque">Ajouter une remarque/description sur votre produit</label><br /><br />
              <textarea name="remarque" id="remarque"></textarea>
              <br />
              <br />
              <label for="prix"> Prix (€):</label>
              <input type="number" name="prix" id="prix" class="champ" min="0"/>
              

            
              <br />
              <br />
        <div class="valider">
          <p>Appuyez sur valider pour confirmer l'inscription</p>
          <input id="validation-depot" type="submit" name="valider" value="Valider l'inscription" />
          <input type="reset" id="rafraichir" value="Rafraîchir" />
        </div>
    </p>
  </form>

 
</div>
