<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=dreamfield', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>