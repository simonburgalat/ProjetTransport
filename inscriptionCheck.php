<?php

session_start();  
// Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard ISO-8859-1)
header('Content-type: text/html; charset=UTF-8');

    // Désactive l'émulateur de requêtes préparées (hautement recommandé)
    $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
                
    // Indique le charset 
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
                
    // Connexion à la bdd
    try
	{
		$bdd = new pdo('mysql:host=localhost;dbname=Projet Transport', 'root', 'root');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	
	// Vérifications
	
	//on crée un tableau qui contiendra les erreurs à afficher
	$erreurs_inscription = array();
	
	// vérifie si le nom n'est pas déjà utilisé
	$result = $bdd->query("SELECT COUNT(*) FROM Users WHERE pseudo = '".$_POST['nom']."'");
	$checkpseudo = $result->fetchColumn();
	if($checkpseudo != 0)
	{
		$erreurs_inscription[] = "Ce nom est deja utilisé.";
	}
	elseif(strlen($_POST['nom']) < 6)
	{
		$erreurs_inscription[] = "Ce nom est trop court (minimum 6 caractères).";
	}
	elseif(strlen($_POST['nom']) > 24)
	{
		$erreurs_inscription[] = "Ce nom est trop long (maximum 24 caractères).";
	}
	
	// vérifie si le mail n'est pas déjà utilisé
	$result = $bdd->query("SELECT COUNT(*) FROM Users WHERE mail = '".$_POST['mail']."'");
	$checkmail = $result->fetchColumn();
	if($checkmail != 0)
	{
		$erreurs_inscription[] = "Un compte avec cette adresse mail existe déjà.";
	}
	
	// vérifie si le mail respecte le format
	if (!preg_match('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#', $_POST['mail']))
		{
			$erreurs_inscription[] = "L'adresse email est invalide.";
		}
		
	// vérifie si les deux mots de passe sont bons
	if ($_POST['pass'] != $_POST['pass2'])
	{
		$erreurs_inscription[] = "Les mots de passe sont différents.";
	}
	elseif(strlen($_POST['pass']) < 4)
	{
		$erreurs_inscription[] = "Ce mot de passe est trop court (minimum 4 caractères).";
	}
	elseif(strlen($_POST['pass']) > 24)
	{
		$erreurs_inscription[] = "Ce mot de passe est trop long (maximum 24 caractères).";
	}
	
	
	
	
	$nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);  
    $email = htmlspecialchars($_POST['mail'], ENT_QUOTES);
    //crypte le mdp
    $pass = md5($_POST['pass']);  
    
    //Affiche le menu
	include ("Menuliens.php") ;
    
    //s'il n'y a aucune erreur, on inscrit le membre dans la bdd
	if (!empty($erreurs_inscription))
	{
		echo "L'inscription a échoué car :";
		echo '<ul>'."\n";
	
	foreach($erreurs_inscription as $e) {
	
		echo '	<li>'.$e.'</li>'."\n";
	}
	
	echo '</ul>';
	echo '<a href="Inscription.php">Retour à l inscription ?</a>';
	}
	else
	{
		$requetepreparee = $bdd->prepare("INSERT INTO `Projet Transport`.`Users` (`ID`, `pseudo`, `pass`, `mail`) VALUES (NULL, '".$nom."', '".$pass."', '".$email."')");
		$requetepreparee->execute();
		echo "Inscription réussie !";
	}
	
	?>