<?php
  //resume the session ALWAYS
  session_start();
  echo "Hello " . $_SESSION['username'] . "<p>Your github url: ". $_SESSION['github'] ."</p>";

  echo "<a href='pageThree.php'>Developer of what ?</a>";

  $_SESSION['haveCar'] = "noooo";
