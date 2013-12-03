       <?php 
	  
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
	  <!--REMPLISSAGE DE LA COMBOBOX DE VEHICULES -->
	<!DOCTYPE html>
<html>
   <head>
       
   </head>
 
   <body>
 
 
       <!--On regarde la table de vehicules et on affiche les ID -->
       <?php $reponse = $bdd->query('SELECT * FROM Vehicule');
        while ($donnees = $reponse->fetch())
		{
		?>
		
		
		<option>
		<?php
		echo $donnees['id'];
		?>
		</option>
		
		
		<?php
		}
		$reponse->closeCursor();
        ?>
 
   </body>
</html>