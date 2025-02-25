<?php

    // Nous déterminerons la colonne dans laquelle les informations doivent être réinitialisées 
    // et modifiées si elles correspondent à l'identifiant qui lui a été envoyé au sein de la fonction edit().

    require_once 'app/models/modelStagiaire.php';

    $stagiaire = new Stagiaire("karim","hamid",23,"hamid@gmail.com,","123456");
    
    $stagiaire->edit(1);