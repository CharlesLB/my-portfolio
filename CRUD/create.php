<?php
  require __DIR__ . "/../vendor/autoload.php";

  // use Source\Models\User;

  // $user = new User();
  // $user->title = "Charles";
  // $user->birthday_date = "2002-01-25";
  // $user->phone = "(32)99159-13955";
  // $user->email = "charles...@gmail.com";
  // $user->github = "CharlesLB";
  // $user->description = "Aluno bacana";
  // $user->linkedin = "a";
  // $user->image = "a";
  // $user->password = "melancia";
  // $user->save();

  // var_dump($user->data());

  use Source\Models\Experience;

  $experience = new Experience();
  $experience->name = "Charles";
  $experience->initial_date = "2002-01-25";
  $experience->final_date = "2002-05-27";
  $experience->description = "Locutor";
  $experience->location = "Radio";;
  $experience->save();

  var_dump($experience->save());