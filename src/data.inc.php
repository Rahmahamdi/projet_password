<?php

// connectioon bdd

try{
    $_bdd=new PDO('mysql:host=localhost;dbname=abonnement;charset=utf8', 'rahma', 'root');
         }
            catch(Exception $e)
                  {
                      die('Erreur : '.$e->getMessage());
                  }

?>