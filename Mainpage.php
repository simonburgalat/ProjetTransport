<?php        
session_start();?>

<!DOCTYPE html>

<html>

  <head>
   <script type="text/javascript" src="script.js"></script>
   <script type="text/javascript" src="jquery-2.0.3.js"></script>
   <script type="text/javascript" src="bootstrap.min.js"></script>
 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>
  
  <div class="container" >
  
 <!-- <div class="page-header">-->
  <div class="navbar navbar-default"> 
  <div class="col-md-4 col-md-offset-1">
  <h1>SSS Plateform </h1>
  </div>
 
 <!-- </div> --> 
  
<!--MENU PRINICPAL -->

    <!--<h1 id='main_titre'>Accueil </h1> --> 
	
	<div class="col-md-4 col-md-offset-3">
	
	<?php if (!empty($_SESSION['id'])) {?>

	<a href="deconnexion.php"> Se déconnecter</a>

<?php } else { ?>

	<!--Menu d'authentification -->
	<div id='auth'>
	<?php include ("connexion.php"); ?>
	</div>
<?php } ?>

	 </div>
	</div>
  </div>
	
	<!--Affichage d'une image de Map -->
	<!--<img id='map_main' src="map_main.png"  alt="Erreur" > -->
	<!--Menu latéral -->
<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>

</div>


</body>

</html>
