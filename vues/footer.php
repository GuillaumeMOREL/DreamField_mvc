<div class="footer-container">
  <footer>
        <div id="champ-footer">
          <ul>
            <div id="text-footer">
              <li><a href="?page=mentions_legales" class="text-footer" > Mentions legales </a></li>
              <li><a href="?page=qui_sommes_nous" class="text-footer" > Qui sommes nous </a></li>
              <li><a href="?page=contacter" class="text-footer" > Nous contacter </a></li>
              <li><a href="?page=plan_du_site" class="text-footer" > Plan du site </a></li> 
              <li><a href="?page=charte_de_confidentialite" class="text-footer" > Charte de confidentialité </a></li>
<?php if (isset($_SESSION['admin']) and $_SESSION['admin']=1):?>
              <li> <a href="?page=BOindex" class="text-footer">Back-office</a></li>
<?php endif; ?>
            </div>
            <div id="logo-footer">
              <li><a href="email.html"> <img class="logo_reseaux_sociaux" src="static/img/logo/email.png"/></a></li>
              <li><a href="facebook"><img class="logo_reseaux_sociaux" src="static/img/logo/facebook.png"/></a></li>
              <li><a href="twitter"><img class="logo_reseaux_sociaux" src="static/img/logo/twitter.png"/></a></li>
              <li><a href="google"><img class="logo_reseaux_sociaux" src="static/img/logo/google.png"/></a></li>

            </div>
          </ul>
        </div>
  </footer>
</div>