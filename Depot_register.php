<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>