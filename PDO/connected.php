<?php

  class Connection {
    public function getConnection() {
      $host = 'localhost';
      $dbname = 'products';
      $dataSourceName = 'mysql:host=' . $host . ';dbname='.$dbname;

      $userName = 'root';
      $password = 'belhassen123';
      return new PDO($dataSourceName, $userName, $password);
    }
  }

  try {
            #START a new connetion with PDO class
    $connection = new Connection();
    $connection = $connection->getConnection();
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $error) {
    echo("<h3 id='e'>connection Failed: " . $error . "</h3>");
  }
