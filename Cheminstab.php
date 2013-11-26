       <?php 
	  
	   //On recupere la base de données Projet Transport
try
{
	$bdd = new pdo('mysql:host=localhost;dbname=Projet Transport', 'root', '');
	}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
	   
	?>  
	  <!--Actualisation et affichage des chemins -->
	<!DOCTYPE html>
<html>
   <head>
       
   </head>
 
   <body>
 
 
       <!--On va chercher les chemins et on affiche les informations relevantes -->
       <?php $reponse = $bdd->query('SELECT * FROM Chemin ORDER BY id');
        while ($donnees = $reponse->fetch())
		{
		?>
		<tr>
		<td>
		<?php
		echo $donnees['id'];
		?>
		
		</td>
		<td>
		<?php
		echo $donnees['Nom'];
		?>
		</td>
		<!--On fera appel a une fontion javascript -->
		<td>   <input type="button" name="details_chemin" value="Détails" onclick="chemin_details()">
		</td>
		</tr>
		
		<?php
		}
		$reponse->closeCursor();
        ?>
 
   </body>
</html>