
<div id="header">    
  <div  id="top-header" class="container">  
      <a href="index.php"><img src="static/img/logo/logo.png" id="logo"></a>
      <div id="acces_compte">
      <a class="connection_inscription_panier" href="?page=connexion">Se connecter</a>
      <a class="connection_inscription_panier" href="?page=inscription">S'inscrire </a>

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

  <div id="menu" class="container">
    <ul>
          <li id="current_page_item"><a href="?page=accueil"  class="menu-text" >Accueil</a></li>
          <li><a href="?page=offres" class="menu-text" >Offres</a></li>
          <li><a href="?page=deposerAnnonce" class="menu-text" >Déposer une annonce</a></li>
          <li><a href="?page=recettes" class="menu-text" >Recette</a></li> 
          <li><a href="?page=redirection" class="menu-text" >Forum</a></li>
          <li><a href="?page=aide" class="menu-text" >Aide</a></li>
          <li id="recherche">

<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
            <form id="search" method="post">
              <input id="search_data" name="saisie" type="search" placeholder="Recherche..." required />
              <a name="go" type="submit" id="logo-search" class="menu-text" value=""/><img src="static/img/logo/logo-recherche.png" id="logo-recherche"/></a>
            </form>
          </li> 
    </ul> 
  </div>

</div>
