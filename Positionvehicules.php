<!DOCTYPE html>

<html>

  <head>
  
 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  <body>
<!--POSITIONS ET DETAILS DES VEHICULES -->
    <h1 id='main_titre'>Positions et détails des véhicules </h1>
	

	<!-- Combobox contennt les ID des véhicules-->
	<!--Je n'ai pas réussi a rendre l'affichage direct après selection d'une option dans la box, d'ou le bouton -->
	<form name="combovehi" method="post" action="Affichedetails.php" >
   <p>
       <label >Selectionner le véhicule à visualiser</label><br />
       <select name="Véhicules" id="Vehicules">
	   <!--Remplissage de la box -->
           <?php include ("Combovehicules.php") ;?>
       </select>
   </p>
   <input type="submit" value="OK" >
</form>
	
	
	<!--Lien vers le tableau complet des véhicules -->
	<a id='Allvehi' href="Allvehicules.php" >Voir tout les véhicules </a>

<!--Formulaire d'ajout de véhicule -->
<div id='ajout_vehicule'>
<form action="Ajoutvehicule.php" method="post">
<p>ID:</p> <input type="text"  name="ID_ajout" >
<p>Type:</p> <input type="text" name="Type_ajout">
<p> <input type="submit"  value="Ajouter le véhicule" onclick=""></p>
</form>
</div>







<!--Map fake -->
<img id='map_main' src="map_main.png" alt="Erreur" >
<!--Menu latéral -->
<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>
</body>

</html>
