<?php

include_once "connection.php";

class Employee extends Dbh {
  public function getEmployee() {
    $selectQuery = "SELECT * FROM employee";

    $result = $this->connection(); #from dbh class

    $result = $result->query($selectQuery);  #(run the query)

    #var_dump($result->fetch()); #array of the first employee
    #var_dump($result->fetchAll()); #array of all employee

    if ($result->rowCount() > 0) {
      while($row = $result->fetch()) {
        $data[] = $row;
      }
      var_dump($data);
      return $data;
    }


  }
}


$employee = new Employee;

$employee->getEmployee();
