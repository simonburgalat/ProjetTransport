<?php
session_start();

// Désactive l'émulateur de requêtes préparées (hautement recommandé)
    $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
                
// Indique le charset 
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
  
if (empty($_POST['login']) || empty ($_POST['pass']))  
{  
	echo "le pseudo et le mot de passe doivent être saisis";  
}  
else   
{  
	// Connexion à la bdd
    try
	{
		$bdd = new pdo('mysql:host=localhost;dbname=Projet Transport', 'root', 'root');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}  
	
	$login = $_POST['login'];  
	$pass = $_POST['pass'];  
  
	$requete = $bdd->prepare('SELECT pass, id FROM Users WHERE pseudo = "'.$login.'"');
	$requete->execute();
	$infos = $requete->fetch(PDO::FETCH_ASSOC);
	 
	include ("Menuliens.php") ;
	
	if ($infos['pass'] == md5($pass))  
	{  
		$_SESSION['login'] = $login;  
		$_SESSION['id'] = $infos['id'];  
		echo '<p>Bienvenue '.$_SESSION['login'].', vous êtes maintenant connecté!</p>';  
	}  
	else  
	{  
		echo "Connexion echouée";  
	}  
}   
?>      