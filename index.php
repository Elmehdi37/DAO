<?php

require_once('app/models/modelStagiaire.php');

$stagiaire = new Stagiaire("khalid","khalfaoui",28,"khalfaoui@gmail.com","1233456789");

echo '<pre>';
print_r($stagiaire->create());
echo '</pre>';