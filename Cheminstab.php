       <?php 
	  
	   //On recupere la base de données Projet Transport
try
{
	$bdd = new pdo('mysql:host=localhost;dbname=Projet Transport', 'root', '');
	}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
	   
	?>  
	  <!--Actualisation et affichage des chemins -->
	<!DOCTYPE html>
<html>
   <head>
       
   </head>
 
   <body>
 

       <!--On va chercher les chemins et on affiche les informations relevantes -->
       <?php $reponse = $bdd->query('SELECT * FROM Chemin ORDER BY id');
        while ($donnees = $reponse->fetch())
		{
		?>
		<tr>
		<td>
		<?php
		echo $donnees['id']." : ";
		$arr= explode("-",$donnees['Nom']);
		$Nomreduit=$arr[0]."-".$arr[count($arr)-1];
		echo $Nomreduit;
		?>
		
		</td>
		<td>
		<?php
		$current_id=$donnees['id'];
		
		$reponse2 = $bdd->query("SELECT * FROM course WHERE Cheminref_id=$current_id");
        $chaine= '';
		$k=0;
		while ($donnees2 = $reponse2->fetch())
		{
		
		$chaine[$k]=$donnees2['Nom'].' - ';
		$k++;
		}
				$chaine[$k-1]=substr($chaine[$k-1],0, strlen($chaine[$k-1])-2);
				$list_course=implode("",$chaine);
		echo $list_course;

		
		
		
		/*while ($donnees2 = $reponse2->fetch())
		{
		
		$current_id=$donnees['Cheminref_id'];
		if($current_id==$donnees['id'])
		{
		echo $donnees2['Nom'];
		
		
		}
		}
		*/
		
		
		
		
		
		
		?>
		</td>
		<!--TRAVAIL EN COURS : On va utiliser du JS et pas du PHP d'escroc comme la-->
		<td>   <input type="submit" name="details_chemin" value="Détails" onclick="">
		</td>
		</tr>
		
		<?php
		}
		$reponse->closeCursor();
		$reponse2->closeCursor();
        ?>
 
   </body>
</html>