<?php
  require_once('connected.php');
  $carName = $modelName = $carNameErr = $carModelErr = "";
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
        <button type="submit" name="submit">Add</button>
    </form>


    <?php
        if (isset($_POST["submit"])) {
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (preg_match("/^[a-zA-Z]{3,}[a-zA-Z]{1}/", $_POST["carName"])) {
              $carName = $_POST["carName"];
            } else {
              $carNameErr = "name not matched";
            }

            if (preg_match("/^[a-zA-Z]{3,}[a-zA-Z]{1}$/", $_POST["carModel"])) {
              $carModel = $_POST["carModel"];
            } else {
              $carModelErr = "Model not matched";
            }


            if ($carModelErr || $carNameErr) {
              echo "<h1 class='regex'>$carNameErr <br /> $carModelErr</h1>";
              exit;

            } elseif ($connection) {

              $command = "insert into cars(name, model) values('$carName', '$carModel')";
              $connection->exec($command);
              echo "<h1 class='regex done'>$carName and $carModel added.</h1>";

            }
          }
        }



    ?>

  </body>
  </html>
