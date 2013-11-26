<?php
session_start();

$_SESSION['compte'] = 'Invité';
try
{
	$bdd = new mysqli('mysql:host=localhost;dbname=Projet Transport', 'root', '');
	}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
   <head>
       <title>Accueil</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8"
   </head>
 
   <body>
 
       <!-- Le menu -->
       <?php include("menu.php"); ?>
       
       <p>
        Salut <?php echo $_SESSION['compte']; ?> !<br />
        <a href="test2.php">Lien</a>
        </p>
 
   </body>
</html>