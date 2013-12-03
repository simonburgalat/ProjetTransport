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
	  
	<!DOCTYPE html>
<html>
   <head>
       
   </head>
 
   <body>
 
 
       <!--On cherche les arrets dans la BDD -->
       <?php $reponse = $bdd->query('SELECT * FROM Arret ORDER BY id');
        while ($donnees = $reponse->fetch())
		{
		// On remplit le tableau
		?>
		<tr>
		<td>
		<?php
		echo $donnees['Nom'];
		?>
		
		</td>
		<td>
		<?php
		echo $donnees['Latitude'];
		?>
		</td>
		<td><?php
		echo $donnees['Longitude'];
		?></td>
		<!--Ici le bouton fera appel a du javascript -->
		<td>   <input type="button" name="details_arret" value="Détails" onclick="arret_details()">
		</td>
		</tr>
		
		<?php
		}
		
		$reponse->closeCursor();
        ?>
 
   </body>
</html>