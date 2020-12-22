<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Experience extends DataLayer
{  
  public function __construct()
  {
    parent::__construct("g33_experiences", ["name", "	initial_date", "final_date", "description", "location"]);
  }

  public function add(string $name, $initial_date, $final_date, string $description, string $location): Experience
  {
    $this->name = $name;
    $this->initial_date = $initial_date;
    $this->final_date = $final_date;
    $this->description = $description;
    $this->location = $location;

    // $this->save();

    var_dump($this->data());

    return $this;
  }
}