<?php
//On définie des varibles pour la connexion à la base de donnée

$conn = new PDO('mysql:host=localhost;dbname=blogNutritionniste', 'root', '');
 
    if(!$conn){
        die("Error: Failed to connect to database!");
    }else{
        echo('connexion réussie');
    }

