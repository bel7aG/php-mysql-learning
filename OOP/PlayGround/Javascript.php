<?php

  class Javascript extends Language {
    private $info;

    public function __construct($isLanguage, $info) {
      parent::__construct($isLanguage);
      $this->info = $info;
    }

    function __destruct() {
      echo "<br />destuct ". __CLASS__ ." class";
    }

    public function setInfo($info) {
        $this->info = $info;
    }

    public function getInfo(){
        return $this->info;
    }

    public function __get() {

    }

    public function __toString() {
      return $this->getIsLanguage() ? "<br /><br />Welcome to language Sub Class: <br />" . $this->info
      : "<br /><p style='color: red'>You can't create $this->info class</p>";
    }
  }
