<?php        
session_start();  

header('Content-type: text/html; charset=UTF-8');
 
session_destroy();  
echo" Vous êtes maintenant déconnecté";

include ("Menuliens.php") ;?>