<?php
 
if(isset($_SESSION['id'])){ 
 
       /* $nomprenom = $bdd->query('SELECT prenom, nom FROM utilisateurs WHERE I_D="id"');*/
        ?>
<div id="header_header">    
  <div  id="top-header" class="container_header">  
      <a href="index.php"><img src="static/img/logo/logo.png" id="logo"></a>
      <div id="acces_compte">
 
         <a class="connection_inscription_panier" href="?page=ProfilUtilisateur&id=<?php echo $_SESSION['id'];?>">Mon Profil</a>
         
      <a class="connection_inscription_panier" style="cursor:pointer" id="toggler"> Mon Panier (0) </a>
      <div id="toggle" style="display:none;  z-index: 1;"> Votre panier est vide.</div>
 
        <script type='text/javascript'>
          
        // On attend que la page soit chargée 
        $(document).ready(function()
        {
           // On cache la zone de texte
           $('#toggle').hide();
           // toggle() lorsque le lien avec l'ID #toggler est cliqué
 
           $('as#toggler').on('click',function()
          {
               
               var offset = $('#toggler').offset();
               console.log(offset.top);
               var x = offset.left;
               var y = offset.top;
              $('#toggle').css('top', y+15);
              $('#toggle').css('left', x-15);
              $('#toggle').toggle(400);
           });
         });
        </script>
     </div>
  </div>
 
  <div id="menu_header" class="container_header">
    <ul>
          <li id="current_page_item"><a href="?page=accueil"  class="menu-text_header" >Accueil</a></li>
          <li><a href="?page=offres" class="menu-text_header" >Offres</a></li>
          <li><a href="?page=deposerAnnonce" class="menu-text_header" >Déposer une annonce</a></li>
          <li><a href="?page=recettes" class="menu-text_header" >Recette</a></li> 
          <li><a href="?page=forum" class="menu-text_header" >Forum</a></li>
          <li><a href="?page=aide" class="menu-text_header" >Aide</a></li>
          <li id="recherche">
 
            <form id="search" method="post" action="?page=search">
              <input id="search_data" name="saisie" type="search" placeholder="Recherche..." required />
              <select name="categorie">
                <option value="annonces">Annonces</option>
                <option value="users">Utilisateur</option>
              </select>
              <input border=0 src="static/img/logo/logo-recherche.png" width="20px" height="20px" type=image Value=submit align="middle" name="submit"> 
            </form>
             
          </li> 
    </ul> 
  </div>
 
</div>
 
        <?php }
          
     else{
      ?>
<div id="header_header">    
  <div  id="top-header" class="container_header">  
      <a href="index.php"><img src="static/img/logo/logo.png" id="logo"></a>
      <div id="acces_compte">
 
      <a class="connection_inscription_panier" href="?page=connexion">Se connecter</a>
      <a class="connection_inscription_panier" href="?page=inscription">S'inscrire </a>
     </div>
  </div>   
 
  <div id="menu_header" class="container_header">
    <ul>
          <li id="current_page_item"><a href="?page=accueil"  class="menu-text_header" >Accueil</a></li>
          <li><a href="?page=offres" class="menu-text_header" >Offres</a></li>
       <!--   <li><a href="?page=deposerAnnonce" class="menu-text_header" >Déposer une annonce</a></li> -->
          <li><a href="?page=recettes" class="menu-text_header" >Recette</a></li> 
          <li><a href="?page=forum" class="menu-text_header" >Forum</a></li>
          <li><a href="?page=aide" class="menu-text_header" >Aide</a></li>
          <li id="recherche">
 
            <form id="search" method="post" action="?page=search">
              <input id="search_data" name="saisie" type="search" placeholder="Recherche..." required />
              <select name="categorie">
                <option value="annonces">Annonces</option>
                <option value="users">Utilisateur</option>
              </select>
              <input border=0 src="static/img/logo/logo-recherche.png" width="20px" height="20px" type=image Value=submit align="middle" name="submit"> 
            </form>
          </li> 
    </ul> 
  </div>
 
</div>

      <?php }
      ?>