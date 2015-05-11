<?php 
session_start();
require("controleurs/database_connect.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />   
    <link rel="Stylesheet" href="static/css/Style_final.css" />
    <link rel="Stylesheet" href="static/css/Style_annoncesfruits.css" />
    <link rel="Stylesheet" href="static/css/Style_connexion.css" />
    <link rel="Stylesheet" href="static/css/Style_contacter.css" />
    <link rel="Stylesheet" href="static/css/Style_redirection.css" />
    <link rel="Stylesheet" href="static/css/Style_DeposerAnnonce.css" />
    <link rel="Stylesheet" href="static/css/Style-panier.css" />
    <link rel="Stylesheet" href="static/css/Style-panier.css" />
    <link rel="Stylesheet" href="static/css/Style-panier.css" />
    <title> DREAMFIELD</title>
</head>

<body>
    <header>
        <?php include("vues/header.php"); ?>
    </header>

		<?php 
		if (!isset($_GET["page"]) || $_GET["page"] == "") {
			include("controleurs/accueil.php");
		}
		else if (isset($_GET['page'])&& !empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'.php')) {
			include("controleurs/".$_GET["page"].".php");
		}
		else {
			include("vues/404.php");
		}

		?>

      <footer>
        <?php include("vues/footer.php"); ?> 
      </footer>
      
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>  
        <script src="static/js/carrousel.js"></script> 
         <script src="static/js/insverif.js"></script>
</body>
</html>
 
    


