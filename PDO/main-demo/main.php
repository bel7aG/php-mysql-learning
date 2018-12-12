<?php
  function __autoload($class) {
    require_once "$class";
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
  <title>Document</title>
</head>
<body>
  <div class="container box">

    <header class="header">
      <nav class="nav">
        <ul>
          <li>Lister</li>
          <li>Ajouter</li>
          <li>Modifier</li>
        </ul>
      </nav>
    </header>


    <div class="table-responsive">
      <table id="user-data" class="table table-bordered table-striped">
        <tr >
          <th width="10%">id</th>
          <th width="20%">name</th>
          <th width="20%">city</th>
          <th width="20%">designation</th>
          <th width="30%">Action</th>
        </tr>
        <tr>
          <td>b</td>
          <td>c</td>
          <td>c</td>
          <td>c</td>
          <td>
            <a href="./edit.php">Edit</a>
            <a href="./delete.php">Delete</a>
          </td>
        </tr>
        <tr>
          <td>c</td>
          <td>a</td>
          <td>b</td>
          <td>c</td>
          <td>
            <a href="./edit.php">Edit</a>
            <a href="./delete.php">Delete</a>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <script src="js/popper.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
