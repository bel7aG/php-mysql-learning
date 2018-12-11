<?php

  class Bel7aG {
    private $name;
    private $surname;
    private $age;
    private $isDeveloper;

    public function __construct($name, $surname, $age, $isDeveloper = true) {
      $this->name = $name;
      $this->surname = $surname;
      $this->age = $age;
      $this->isDeveloper = $isDeveloper;
    }

    public function __toString() {
      return $this->name . " " . $this->surname . "<br />age: " . $this->age . ($this->isDeveloper ? "is a developer" : "he dont know anythink about programming");
    }

    public function __get($attribute) {
      return $this->$attribute;
    }

    public function __set($attribute, $value) {
      $this->$attribute = $value;
    }
}
