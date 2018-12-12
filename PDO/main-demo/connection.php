<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="">
  <title>Document</title>
  <link rel="stylesheet" href="css/master.css">
</head>
<body>



  <?php
    class Dbh {
      private $userName;
      private $password;
      private $host;
      private $dbName;
      private $charset;

      public function connection() {
        $this->userName = 'root';
        $this->password = 'belhassen123';
        $this->host = 'localhost';
        $this->dbName = 'my_bd';
        $this->charset = 'utf8mb4';

        try {

          $dsn = "mysql:host="
          . $this->host
          .";dbname="
          .$this->dbName
          .";charset="
          .$this->charset;

          $pdo = new PDO($dsn, $this->userName, $this->password);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $error) {
          echo ("<h1 id='e'>ouch problem :( <p>". $error->getMessage() ."</p></h1>");
        }
      }
    }

    $cnx = new Dbh();
    $cnx->connection();


  ?>








</body>
</html>
