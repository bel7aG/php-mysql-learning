<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="master.css">
</head>
<body>


  <?php

    class Dbh {
      private $serverName;
      private $userName;
      private $password;
      private $dbName;
      private $charset;

      public function connect() {
        $this->serverName = 'localhost';
        $this->userName = 'root';
        $this->password = 'belhassen123';
        $this->dbName = 'my_bd';
        $this->charset = 'utf8mb4';

        try {

          $dsn = 'mysql:host='
          . $this->serverName
          . ';dbname='
          . $this->dbName
          . ';charset='
          . $this->charset;
          $myPDO = new PDO($dsn, $this->userName, $this->password);
          $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $myPDO;

        } catch(PDOException $error) {
          echo "<h1 id='e'>We Have Error Here ... <br /><p id='ep'>" . $error->getMessage() . "</p></h1>";
        }

      }

    }

    $db = new Dbh();
    $db->connect();

  ?>


</body>
</html>
