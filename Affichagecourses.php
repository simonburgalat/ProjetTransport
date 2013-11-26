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
 
       <!--Ici on va récupérer les courses puis les chemins associés grace a la variable chemin-ref contenu dans chacune des courses -->
       <?php $reponse = $bdd->query('SELECT * FROM Course ORDER BY id');
        while ($donnees = $reponse->fetch())
		{
		?>
		<tr>
		<td>
		<?php
		echo $donnees['Nom'];
		?>
		
		</td>
		<td>
		<?php
		//On récupère le chemin associé à la course
		$chem=$donnees['Cheminref_id'];
		//On regarde dans la table de chemin en allant chercher l'ID précedemment récupéré
		$reponse2=$bdd->query('SELECT Nom FROM Chemin WHERE id='.$chem.'');
		while($donnees2=$reponse2->fetch())
		{
		//On affiche le nom de ce chemin
		echo $donnees2['Nom'];
		}
		?>
		</td>
		<td>
		<?php
		//Affichage des horaires
	echo $donnees['Heure_debut'];
	echo"-";
		echo $donnees['Heure_fin'];
		?>
		</td>
		
		</tr>
		
		<?php
		}
		$reponse->closeCursor();
        ?>
 
   </body>
</html>