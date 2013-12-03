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
	$deletenom=trim($_POST['arret_nom_suppr']);
	
	 $reponse = $bdd->query('SELECT * FROM arret ORDER BY id');
        while ($donnees = $reponse->fetch())
		{
		$current_nom=trim($donnees['Nom']);
		$current_id=$donnees['id'];
		if($current_nom==$deletenom)
		{
		//Bonne syntaxe au niveau du delete
			$sqlquery="DELETE FROM arret WHERE id=$current_id";
			//die($sqlquery);
		$bdd->query($sqlquery);
		
		
		}
		}
		
	
	
	include ("Listearrets.php") ;
	 
		$reponse->closeCursor();

	//on redirige directement vers l'accueil
	
	header('Location: Arretsreseau.php');

?>