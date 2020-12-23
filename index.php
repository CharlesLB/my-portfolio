<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\DataLayer\DataLayer;
use CoffeeCode\DataLayer\Connect;

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

$experienceAdd = new Experience();

if($experienceAdd->add('teste', null, null, 'teste', 'local dahora')){
  echo 'Oba!';
} else {
  $callback = $experienceAdd->fail()->getMessage();
  echo json_encode($callback);
  return;
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


//
// ─── Conexão direta no banco FUNFOU ──────────────────────────────────────────────────────────────────────────
//

$connect = Connect::getInstance();
$error = Connect::getError();

if($error){
  echo $error->getMessage();
  die();
}

// $query = $connect->query("INSERT INTO `alunolp2i`.`g33_experiences` (`id`, `name`, `initial_date`, `final_date`, `description`, `location`, `created_at`) VALUES (NULL, 'Testenocodigo', NULL, NULL, 'teste', 'teste', CURRENT_TIMESTAMP);");
// var_dump($query->execute());