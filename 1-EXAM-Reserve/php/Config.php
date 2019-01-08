<?php
  class Config  {
    private $usename;
    private $password;
    private $dbname;
    private $host;

    public function getConnection() {
      $this->host = "localhost";
      $this->username = "root";
      $this->password = "belhassen123";
      $this->dbname = "exam";
      $this->charset = "utf8mb4";
      try {
        $dbh = "mysql:host="
        . $this->host
        . ";dbname="
        . $this->dbname
        . ";charset="
        . $this->charset;

        $pdo = new PDO($dbh, $this->username, $this->password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
      } catch (PDOException $error) {
        echo "<h1 class='e'>error.. <p>" . $error->getMessage() . "</p></h1>";
      }
    }
  }

  $connect = new Config;
  $connect->getConnection();
