<?php        
session_start();?>

<!DOCTYPE html>

<html>

  <head>
  <script type="text/javascript" src="script.js"></script>
   <script type="text/javascript" src="jquery-2.0.3.js"></script>
 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  <body>
  
<!--MENU PRINICPAL -->

    <h1 id='main_titre'>Accueil </h1>
	
	<?php if (!empty($_SESSION['id'])) {?>

	<a href="deconnexion.php"> Se déconnecter</a>

<?php } else { ?>

	<!--Menu d'authentification -->
	<div id='auth'>
	<?php include ("connexion.php"); ?>
	</div>
<?php } ?>
	
	<!--Affichage d'une image de Map -->
	<img id='map_main' src="map_main.png" alt="Erreur" >
	<!--Menu latéral -->
<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>




</body>

</html>
