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
	$req = $bdd->prepare("INSERT INTO Vehicule(id,Modele) VALUES(?, ?)");
	$req->execute(array($_POST['ID_ajout'], $_POST['Type_ajout']));
	
	
	include ("ID_vehicules.php") ;
	 
		$reponse->closeCursor();

	//on redirige directement vers l'accueil
	header('Location: Positionvehicules.php');
?>