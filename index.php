<?php 
session_start();
require_once("controleurs/database_connect.php");
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />   
    <link rel="Stylesheet" href="static/css/Style_accueil.css" />
    <link rel="Stylesheet" href="static/css/Style_offres.css" />
    <link rel="Stylesheet" href="static/css/Style_connexion.css" />
    <link rel="Stylesheet" href="static/css/Style_contacter.css" />
    <link rel="Stylesheet" href="static/css/Style_redirection.css" />
    <link rel="Stylesheet" href="static/css/Style_deposerAnnonce.css" />
    <link rel="Stylesheet" href="static/css/Style_inscription.css" />
    <link rel="Stylesheet" href="static/css/Style_redirection.css" />
    <link rel="Stylesheet" href="static/css/Style_vendeurs.css" />
    <link rel="Stylesheet" href="static/css/Style_recettes.css" />
    <link rel="Stylesheet" href="static/css/Style_pageRecette.css" />
    <link rel="Stylesheet" href="static/css/Style_forum.css" />
    <link rel="Stylesheet" href="static/css/Style_sujet.css" />
    <link rel="Stylesheet" href="static/css/Style_profilUtilisateur.css" />
    <link rel="Stylesheet" href="static/css/Style_editionprofil.css" />
    <link rel="Stylesheet" href="static/css/Style_editionAnnonce.css" />
    <link rel="Stylesheet" href="static/css/footer.css" />
    <link rel="Stylesheet" href="static/css/header.css" />
    <link rel="Stylesheet" href="static/css/Style-BOindex.css" />

    <link rel="Stylesheet" href="static/css/aide.css" />


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

        <div id="logo-fl">
            <a href="#"><img src="static/img/logo/fleche.png" id="logo-fleche" ></a>
        </div>

    <footer>
<?php include("vues/footer.php"); ?> 
    </footer>
      
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>  
        <script src="static/js/carrousel.js"></script> 
        <script src="static/js/insverif.js"></script>
        <script src="static/js/offres_sauvegardees.js"></script>
        <script src="static/js/Recuperer-le-dep.js"></script> 
        <script src="static/js/depotverif.js"></script>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

</body>
</html>