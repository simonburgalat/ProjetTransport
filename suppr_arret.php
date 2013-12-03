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
	
	$bdd->query('DELETE * FROM arret WHERE Nom=$_POST['arret_nom_suppr']');

	
	
	
	include ("Listearrets.php") ;
	 
		$reponse->closeCursor();

	//on redirige directement vers l'accueil
	header('Location: Arretsreseau.php');
?>