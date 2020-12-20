<?php

require __DIR__ . "/vendor/autoload.php";

// use CoffeeCode\DataLayer\Connect;
use CoffeeCode\DataLayer\DataLayer;

// $connection = Connect::getInstance();
// $error = Connect::getError();

// if ($error) {
//   echo $error->getMessage();
//   die;
// }

// $query = $connection->query("SELECT * FROM `g33_users` WHERE 1");
// var_dump($query->fetchAll());

use Source\Models\Experience;

$experience = new Experience();
$list = $experience->find()->fetch(true);

var_dump($list);