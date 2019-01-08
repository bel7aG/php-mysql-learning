<?php

  include_once "./Config.php";

  class Crud extends Config {
    private $connect;

    public function select() {
      $select = "SELECT * FROM exam_array";

      $result = $this->getConnection()->query($select);

      if ($result->rowCount() > 0) {
        while ($row = $result->fetch()) {
          $data[] = $row;
        }
        return $data;
      }
    }

    public function insert(_class2 $app) {
      $_1 = $app->get_1();
      $_2 = $app->get_2();
      $_3 = $app->get_3();
      $_4 = $app->get_4();
      $_5 = $app->get_5();
      $_6 = $app->get_6();
      $_7 = $app->get_7();

      $insert = "INSERT INTO exam_array (`_1`, `_2`, `_3`, `_4`, `_5`, `_6`, `_7`) VALUES ('$_1', '$_2', '$_3', '$_4', '$_5', '$_6', '$_7')";
      $result = $this->getConnection()->exec($insert);
    }

    /* get _1 in the url and select iit*/

    public function getValues($value) {
      $getSelectedRow = "SELECT * FROM exam_array WHERE _1 = $value";

      $result = $this->getConnection()->query($getSelectedRow);

      return $result->fetch(PDO::FETCH_NUM);
    }


    public function update(_class2 $app) {
      $_1 = $app->get_1();
      $_2 = $app->get_2();
      $_3 = $app->get_3();
      $_4 = $app->get_4();
      $_5 = $app->get_5();
      $_6 = $app->get_6();
      $_7 = $app->get_7();


      // tawa madech inajem ibadel e _1 mte3ou :D
      $_1 = $_GET['ref'];

      $update = "UPDATE `exam_array` SET `_1` = '$_1', `_2` = '$_2', `_3` = '$_3', `_4` = '$_4' , `_5` = '$_5', `_6` = '$_6', `_7` = '$_7' WHERE `exam_array`.`_1` = $_1";

      $result = $this->getConnection()->exec($update);
    }


    public function delete($value) {
      $delete = "DELETE FROM `exam_array` WHERE `exam_array`.`_1` = $value";

      $result = $this->getConnection()->query($delete);

    }

  }
