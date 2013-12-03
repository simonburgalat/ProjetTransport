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
	  <!--Affichage des Courses associées          !!!!!!!            NE SERT A RIEN POUR LE MOMENT-->
	<!DOCTYPE html>
<html>
   <head>
       
   </head>
 
   <body>

<?php $var i=0; ?>
       <!--On cherche dans la table de courses -->
       <?php $reponse = $bdd->query('SELECT Nom FROM course WHERE Cheminref_id = ');
        while ($donnees = $reponse->fetch())
		{
		$i++;
		//On remplit le tableau avec les infos requises, dans l'ordre croissant des ID en ajoutant des lignes et des cases
		?>
		<tr>
		<td>
		<?php
		echo $donnees['Cheminref_id'];
		?>
		
		</td>
		<td>
		<?php
		echo $donnees['Modele'];
		?>
		</td>
		<td></td>
		<!--Dans cette case se trouve le bouton de détails du véhicules, on fera appelle a une fonction javascript pour afficher les infos dans une POP UP -->
		<td>   <input type="button" name="details_vehicule" value="Détails" onclick="vehicule_details()">
		</td>
		</tr>
		
		<?php
		}
		$reponse->closeCursor();
        ?>
 
   </body>
</html>