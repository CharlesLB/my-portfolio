<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Project extends DataLayer
{
  public function __construct()
  {
    parent::__construct("g33_projects", ["title", "subtitle", "url", "image", "technologies", "description"]);
  }

  public function add(string $title, $subtitle, $url, $image, $technologies, $description): Project
  {
    $this->title = $title;
    $this->subtitle = $subtitle;
    $this->url = $url;
    $this->image = $image;
    $this->technologies = $technologies;
    $this->description = $description;

    // $this->save();

    var_dump($this->data());

    return $this;
  }
}
