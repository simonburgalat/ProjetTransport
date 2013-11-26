<?php
	//On se connecte a la base de données Projet Transport
	debug_print_backtrace() ;
	try
	{
	$bdd = new pdo('mysql:host=localhost;dbname=Projet Transport', 'root', '');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}
	
	//on ecrit dans la bdd en recuperant les valeurs du formulaire
	$req = $bdd->prepare("INSERT INTO Arret(Nom,Latitude,Longitude) VALUES(?, ?, ?)");

	$req->execute(array($_POST['arret_nom_ajout'],$_POST['arret_latitude_ajout'],$_POST['arret_longitude_ajout'] ));
	
	
	include ("Listearrets.php") ;
	 
		$reponse->closeCursor();

	//on redirige directement vers l'accueil
	header('Location: Arretsreseau.php');
?>