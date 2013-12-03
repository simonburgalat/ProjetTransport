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
		// On récupère l'id de la course
		$courseid=$donnees['id'];
		?>
		
		<tr>
		<td>
		<?php
		// On affiche son nom
		echo $donnees['Nom'];
		?>
		
		</td>
		<td>
		<?php
		//On récupère le chemin associé à la course
		$chem=$donnees['Cheminref_id'];
		//On regarde le nom dans la table de chemin en allant chercher avec l'ID précedemment récupéré
		$reponse2=$bdd->query('SELECT Nom FROM Chemin WHERE id='.$chem.'');
		while($donnees2=$reponse2->fetch())
		{
		//On "casse" le nom de ce chemin pour récupérer le nom de chaque arret
		$arr = explode('-', $donnees2['Nom']);
		//Avec ce nom on va recuperer l'horaire associer à cet arret et à cette course
		$reponse3=$bdd->query('SELECT * FROM horaire WHERE Arret_id='.$chem.' AND Course_id='.$courseid.'');
		while($donnees3=$reponse3->fetch())
		{
		
		//Pour chaque arret de la course
		for($n=0;$n<count($arr);$n++)
		{
		//On affiche le nom de l'arret et l'horaire qui lui correspond
		echo nl2br($arr[$n] +':'+ $donnees3['Heure']);
		}
		
		}
		?>
		</td>
		<td>
		<?php
		//Affichage des horaires de départ et d'arrivée
	echo $donnees['Heure_debut'];
	echo"-";
		echo $donnees['Heure_fin'];
		?>
		</td>
		
		</tr>
		
		<?php
		}
		}
		$reponse->closeCursor();
        ?>
 
   </body>
</html>