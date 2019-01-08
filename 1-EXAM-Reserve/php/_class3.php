<?php

  require_once "./_class1.php";

  class _class3 extends _class1 {
    private $_7;

    public function __construct($_1, $_2, $_3, $_4, $_5, $_6, $_7) {
      parent::__construct($_1, $_2, $_3, $_4, $_5, $_6);

      $this->_7 = $_7;
    }

    public function set_7($_7) {
        $this->_7 = $_7;
    }

    public function get_7(){
        return $this->_7;
    }
}
