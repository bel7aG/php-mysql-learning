<?php
  include_once "Bel7ag.php";


  $bel7aG = new Bel7aG('Belhassen', 'Gharsallah', 22);
  $myName = $bel7aG->name;       #get
  echo $myName;

  $bel7aG->name = " <br />lola"; #set


  echo $bel7aG->name;            #get
