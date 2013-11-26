<?php

//On demarre la session
session_start();

//On recupere la base de données Projet Transport
try
{
	$bdd = new pdo('mysql:host=localhost;dbname=Projet Transport', 'root', 'root');
	}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
   <head>
       <title>List</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8"
   </head>
 
   <body>
 
       <?php include("menu.php"); ?>
       <?php echo $_SESSION['compte']; ?> , tu es sur la page 2 !<br />
       
       <?php $reponse = $bdd->query('SELECT * FROM Course');
        while ($donnees = $reponse->fetch())
		{
		echo $donnees['Nom'];
		}
		$reponse->closeCursor();
        ?>
 
   </body>
</html>