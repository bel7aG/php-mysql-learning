<?php

  class Language {
    private $isLanguage;

    private static $static = 12;

    public function __construct($isLanguage) {
      $this->isLanguage = $isLanguage;
    }

    public function setIsLanguage($isLanguage) {
      $this->isLanguage = $isLanguage;
    }

    public function getIsLanguage(){
      return $this->isLanguage;
    }


    public function getStatic(){
        return self::$static;
    }


    public function __toString() {
      return "<br /><br />Welcome to language Super Class: <br /> Language";
    }

    function __destruct() {
      echo "<br />Finished";
    }

}
