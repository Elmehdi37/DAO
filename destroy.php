<?php 

    // Nous identifions l'objet ou la colonne qui doit être supprimé d'une table ou d'un modèle de la base de données 
    // via la fonction destroy() en envoyant $id, qui précise ce qui doit être supprimé.

    require_once 'app/models/modelStagiaire.php';

    $stagiaire = new Stagiaire();
    // Les colonnes dont l'identifiant est égal à 1 seront supprimées
    $stagiaire->destroy(1);