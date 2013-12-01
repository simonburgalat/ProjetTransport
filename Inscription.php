<?php
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
 		
 		<form action="inscriptionCheck.php" method="post">
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
        <p>
        <label for="pass2">Retapez le mot de passe</label> :
        <input type="text" name="pass2" id="pass2" />
        </p>

        <input type="submit" value="S'inscrire" />
    	</form>	
   </body>
</html>