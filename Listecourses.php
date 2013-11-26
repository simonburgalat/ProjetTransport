
<!DOCTYPE html>

<html>

  <head>
  
 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  <body>
<!-- LISTE DES COURSES-->


    <h1 id='main_titre'>Liste des courses</h1>
	

	<!--Tableau des courses -->
<div id='menu_courses'>
<table  border="1" >

<tr>
<th> Courses</th>
<th> Chemin</th>
<th> Horaires</th>
</tr>
<tr>
<!--Affichage des infos pertinentes de la BDD -->
<?php include("Affichagecourses.php") ?>
</tr>



</table>
</div>
<!--Menu latéral -->
<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>


</body>

</html>
