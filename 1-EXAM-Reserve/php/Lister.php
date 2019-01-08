<?php
  function __autoload($class) {
    require_once "$class.php";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/master.css">
  <title>Document</title>
</head>
<body>
  <div class="container box">

    <header class="header">
      <nav class="nav">
        <ul>
          <li><a href="Lister.php">Lister</a></li>
          <li><a href="Ajouter.php" target="_blank">Ajouter</a></li>
          <li><a href="Modifier.php">Modifier</a></li>
        </ul>
      </nav>
    </header>


    <div class="table-responsive">
      <table id="user-data" class="table table-bordered table-striped">
        <tr >
          <th>_1</th>
          <th>_2</th>
          <th>_3</th>
          <th>_4</th>
          <th>_5</th>
          <th>_6</th>
          <th>_7</th>
          <th>_8</th>
        </tr>
        <?php
          $crud = new Crud;
          $rows = $crud->select();
        ?>


        <?php
          if ($rows)
            foreach ($rows as $row) :
        ?>
        <tr>
          <td><?php echo ($row[0]);?></td>
          <td><?php echo ($row[1]);?></td>
          <td><?php echo ($row[2]);?></td>
          <td><?php echo ($row[3]);?></td>
          <td><?php echo ($row[4]);?></td>
          <td><?php echo ($row[5]);?></td>
          <td><?php echo ($row[6]);?></td>
          <td>
            <a href="./Modifier.php?ref=<?php echo $row[0]; ?>"  >Edit</a>
            <a href="./Supprimer.php?ref=<?php echo $row[0]; ?>"  >Delete</a>
          </td>
        </tr>

      <?php endforeach; ?>


      </table>
    </div>
  </div>
</body>
</html>
