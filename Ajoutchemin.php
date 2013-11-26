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
	$id=$_POST['ID_chemin'];
	$depart=$_POST['Depart_chemin'];
	$terminus=$_POST['Terminus_chemin'];
	
$concat  = $depart.'-'.$terminus;

$req = $bdd->prepare("INSERT INTO Chemin(id,Nom) VALUES(?, ?)");
// On envoie la variable (ne fonctionne pas certainement du a une erreur de syntaxe)
	$req->execute(array($id,$concat));
	$req->closeCursor();
	//On ré-affiche le tableau actualisé
	include ("Cheminstab.php") ;
	 
		

	//on redirige directement vers l'accueil
	header('Location: Listechemins.php');
?>