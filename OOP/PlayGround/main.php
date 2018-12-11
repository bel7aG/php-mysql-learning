<?php
  include_once "Language.php";
  include_once "Javascript.php";
  include_once "Python.php";

  $language = new Language(true);

  echo $language->getStatic();

  echo $language->__toString();

  $python = new Python(false, 'Python');
  echo $python;

  $js = new Javascript(true, 'Javascript');
  echo $js;
