<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Experience extends DataLayer
{
  public function __construct()
  {
    parent::__construct("g33_experiences", ["name", "	initial_date", "	final_date", "descripition", "location"], "id", false);
  }
}
