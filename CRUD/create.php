<?php
  require __DIR__ . "/../vendor/autoload.php";

  use Source\Models\User;

  $user = new User();
  $user->title = "Charles";
  $user->birthday_date = "2002-01-25";
  $user->phone = "(32)99159-13955";
  $user->email = "charles...@gmail.com";
  $user->github = "CharlesLB";
  $user->description = "Aluno bacana";
  $user->linkedin = "a";
  $user->image = "a";
  $user->password = "melancia";
  $user->save();

  var_dump($user->data());