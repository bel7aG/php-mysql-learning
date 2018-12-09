<?php

  $host = 'localhost';
  $dbname = 'products';

  $dataSourceName = 'mysql:host=' . $host . ';dbname='.$dbname;

  $userName = 'root';
  $password = 'belhassen123';

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <label for="carName">
          <p>Car Name</p>
          <input type="text" name="carName">
        </label>
        <label for="carModel">
          <p>Car Model</p>
          <input type="text" name="carModel">
        </label>
        <button name="submit">Add</button>
    </form>
    <?php
      if (isset($_POST["submit"])) {
        $carName = $_POST["carName"];
        $carModel = $_POST["carModel"];
        try {
                  #START a new connetion with PDO class
          $dataBase = new PDO($dataSourceName, $userName, $password);

          $dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          echo "Car name: " . $carName . "<br />Model: " . $carModel . " added with succes";
          $command = "INSERT INTO cars(reference, name, model) VALUES (124, '$carName', '$carModel')";

          $dataBase->exec($command);
        } catch(PDOException $error) {

          echo("<h3 class='error'>connection Failed: " . $error . "</h3>");
        }
      }

    ?>
  </body>
  </html>
