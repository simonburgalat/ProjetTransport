<?php
	//On se connecte a la base de données Projet Transport
	try
	{
	$bdd = new pdo('mysql:host=localhost;dbname=Projet Transport', 'root', 'root');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}
	
	//on ecrit dans la bdd en recuperant les valeurs du formulaire
	$req = $bdd->prepare('INSERT INTO User(nom_utilisateur, password, mailaddress) VALUES(?, ?, ?)');
	$req->execute(array($_POST['nom'], $_POST['pass'], $_POST['mail']));

	//on redirige directement vers l'accueil
	header('Location: test.php');
?>