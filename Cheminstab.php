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
		<!--TRAVAIL EN COURS : On va utiliser du JS et pas du PHP d'escroc comme la-->
		<td>   <input type="submit" name="details_chemin" value="Détails" onclick="<?php include("courses_assoc.php"); ?>">
		</td>
		</tr>
		
		<?php
		}
		$reponse->closeCursor();
        ?>
 
   </body>
</html>