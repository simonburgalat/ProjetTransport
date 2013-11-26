
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

<!--Le CDC laisse penser qu'il faudra calculer la position des véhicules et la BDD devra etre enrichie pour lier les véhicules aux chemins etc -->
Details dynamiques a ajouter + modifier la BDD je pense pour associer les courses a un vehicules 