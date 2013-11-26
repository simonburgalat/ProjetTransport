<?php
//Creation de compte utilisateur
session_start();
?>

<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>

<!DOCTYPE html>
<html>
   <head>
       <title>Inscription</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8"
   </head>
 
   <body>
 		
 		<form action="test3.php" method="post">
        <p>
        <label for="nom">Nom utilisateur</label> :
        <input type="text" name="nom" id="nom" />
        </p>
        <p>
        <label for="mail">Mail</label> :
        <input type="text" name="mail" id="mail" />
        </p>
        <p>
        <label for="pass">Mot de passe</label> :
        <input type="text" name="pass" id="pass" />
        </p>

        <input type="submit" value="S'inscrire" />
    	</form>
		
   </body>
</html>