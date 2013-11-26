<!DOCTYPE html>

<html>

  <head>
  
 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  <body>
<!-- LISTE DES CHEMINS-->
    <h1 id='main_titre'>Liste des lignes</h1>
	

	
<div id='menu_trajets'>
<table  border="1" >

<tr>
<th> Chemins</th>
<th> Courses</th>

</tr>
<tr>
<!--On affiche le tableau de chemins -->
 <?php include("Cheminstab.php")?>   


</tr>

<!--Formulaire d'ajout de chemin -->
<div id='ajout_chemin'>
<form action="Ajoutchemin.php" method="post">
<p>ID:</p> <input type="text"  name="ID_chemin">
<p>Départ:</p> <input type="text" name="Depart_chemin">
<p>Terminus:</p> <input type="text" name="Terminus_chemin">
<p> <input type="submit" name="new_chemin" value="Ajouter le chemin" ></p>
</form>
</div>


</table>
</div>
<!--Menu latéral -->
<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>


</body>

</html>
