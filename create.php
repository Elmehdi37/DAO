<?php

    // Ici, nous recevons des données d'objet afin de créer un nouvel objet dans le modèle. 
    // Cela se fait en appelant la classe Model et en utilisant la fonction create(), 
    // qui permet de créer un nouvel objet dans la base de données.

    require_once 'app/models/modelStagiaire.php' ;

    $stagiaire = new Stagiaire("karim","hamid",24,"h@gmail.com,","123");
    $stagiaire->create();