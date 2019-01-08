<?php
  require_once('Config.php');
  require_once('./Crud.php');
?>

<?php
  $connect = new Config();
  $connection = $connect->getConnection();


  if ($connection) {
    $delete = new Crud;
    $delete->delete($_GET['ref']);
    header("location: Lister.php");
  }
