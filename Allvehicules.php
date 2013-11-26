<!--Affichage de tout les véhicules en tableau -->

<div id='menu_vehicules'>
<table  border="1" >

<tr>
<th>ID

 </th>
<th> Type</th>
<th> Position</th>
<th> Plus de détails</th>
</tr>
<!--Affichage des informations pertinentes de la BDD -->
<tr>
<?php 
 include ("ID_vehicules.php") ; 
  ?>  
  
</tr>

</table>
</div>
<!--Retour a la page précédente -->
<a href="Positionvehicules.php" >Retour</a>