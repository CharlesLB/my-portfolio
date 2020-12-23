<?php

require __DIR__ . "/../vendor/autoload.php";

use CoffeeCode\DataLayer\DataLayer;

use Source\Models\Experience;
use Source\Models\User;
use Source\Models\Project;


//
// ─── Ligação Banco de dados com tabela experience ─────────────────────────────────────────────────────────────────
//

$experience = new Experience();
$listE = $experience->find()->fetch(true);

foreach ($listE as $experienceItem) {
  var_dump($experienceItem->data(), '<br><br>');
}

//
// ─── Ligação Banco de dados com tabela user ─────────────────────────────────────────────────────────────────
//

$user = new User();
$listU = $user->find()->fetch(true);

foreach ($listU as $userItem) {
  var_dump($userItem->data(),'<br><br>');
}

//
// ─── Ligação Banco de dados com tabela projects ─────────────────────────────────────────────────────────────────
//

$project = new Project();
$listP = $project->find()->fetch(true);

foreach ($listP as $projectItem) {
  var_dump($projectItem->data());
}
