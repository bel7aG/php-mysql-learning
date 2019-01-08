<?php
  require_once('Config.php');
  require_once('./Crud.php');
  require_once('./_class2.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/main.css">
</head>


<body>

  <header class="header">
    <nav class="nav">
      <ul>
        <li><a href="Lister.php">Lister</a></li>
        <li><a href="Ajouter.php" target="_blank">Ajouter</a></li>
        <li><a href="Modifier.php">Modifier</a></li>
      </ul>
    </nav>
  </header>

  <?php
      $connect = new Config();
      $connection = $connect->getConnection();


      if (isset($_POST["submit"])) {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

          $_1 = $_POST['_1'];
          $_2 = $_POST['_2'];
          $_3 = $_POST['_3'];
          $_4 = $_POST['_4'];
          $_5 = $_POST['_5'];
          $_6 = $_POST['_6'];
          $_7 = $_POST['_7'];


          if ($connection) {
            $insert = new Crud();
            $element = new _class2($_1, $_2, $_3, $_4, $_5, $_6, $_7);
            $insert->insert($element);
            echo "<h1 class='regex done'>$_1 added with succes.</h1>";
          }

        }
      }

  ?>
  <form action="" method="POST">
      <label for="_1">
        <p>_1</p>
        <input type="text" name="_1">
      </label>
      <label for="">
        <p>_2</p>
        <input type="text" name="_2">
      </label>
      <label for="_3">
        <p>_3</p>
        <input type="text" name="_3">
      </label>
      <label for="_4">
        <p>_4</p>
        <input type="text" name="_4">
      </label>
      <label for="_5">
        <p>_5</p>
        <select name='_5'>
          <option value="Bureau">Bureau</option>
          <option value="Domicile">Domicile</option>
         </select>
      </label>
      <label for="_6">
        <p>_6</p>
        <input type="text" name="_6">
      </label>
      <label for="_7">
        <p>_7</p>
        <input type="text" name="_7">
      </label>
      <button type="submit" name="submit">Add</button>
  </form>




</body>
</html>
