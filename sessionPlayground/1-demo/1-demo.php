<?php

  session_start();
  $_SESSION['username'] = 'bel7aG';

  $_SESSION['github'] = 'https://www.github.com/bel7aG';
  $_SESSION['es'] = 'You are Javascript Developer not this big BAD';
  $_SESSION['github'] = 'https://www.github.com/bel7aG';

  echo "<a href='./pageTwo.php'>go to page 2</a>";

  echo "<br />" . $_SESSION['username'];
