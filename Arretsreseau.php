<!DOCTYPE html>


<!--Liste des arrets du réseau -->


<html>

  <head>
  
 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  <body>

    <h1 id='main_titre'>Arrets du réseau</h1>
	

	
<div id='menu_arrets'>
<table  border="1" >

<tr>
<th> Arrets</th>
<th> Latitude</th>
<th> Longitude</th>
<th> </th>

</tr>
<tr>
<!--Affichage des infos concernant les arrets -->
<?php 
 include ("Listearrets.php") ; 
  ?>  
</tr>

</table>
</div>


<!--TRAVAIL EN COURS -->



<!--Formulaire d'ajout d'un arret -->
<div id='ajout_arret'>
<form action="ajoutarret.php" method="post">
<p>Nom:</p> <input type="text"  id="arret_nom_ajout">
<p>Latitude:</p> <input type="text" id="arret_latitude_ajout">
<p>Longitude:</p> <input type="text" id="arret_longitude_ajout">
<p> <input type="submit" value="Ajouter l'arret" ></p>
</form>
</div>
<!--Formulaire de suppression d'arret -->
<div id='suppr_arret'>
<form action="supprarret.php" method="post">
<p>Nom:</p> <input type="text"  id="arret_nom_suppr">
<p> <input type="submit" value="Supprimer l'arret" ></p>
</form>
</div>


<!--Menu latéral -->
<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>


</body>

</html>
