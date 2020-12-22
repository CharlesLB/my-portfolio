<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
  public function __construct()
  {
    parent::__construct("g33_users", ["name", "birthday_date", "phone", "email", "github", "description", "linkedin", "image", "password"]);
  }

  public function add(string $name, $birthday_date, $phone, $email, $github, $description, $linkedin, $image, $password): User
  {
    $this->name = $name;
    $this->birthday_date = $birthday_date;
    $this->phone = $phone;
    $this->email = $email;
    $this->github = $github;
    $this->description = $description;
    $this->linkedin = $linkedin;
    $this->image = $image;
    $this->password = $password;

    // $this->save();

    var_dump($this->data());

    return $this;
  }
}
