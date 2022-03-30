<?php

  $unis = 3.50;
  $uni = $_POST["unitsfield"];
  session_start();
  if ($uni <= 50) {
    $ANS = $uni * $unis;
    echo "ANS :" . $ANS; 
  }
  elseif ($uni >= 50 && $uni <= 100) {
    $ANS = $uni * 4.00;
    echo "ANS :" . $ANS;
  }
  elseif ($uni >= 100 && $uni <= 200) {
    $ANS = $uni * 5.20;
    echo "ANS :" . $ANS;
  }
  elseif ($uni >= 200 && $uni <= 450) {
    $ANS = $uni * 6.50;
    echo "ANS :" . $ANS;
  }
  else
  {
    echo "WORONFF";
    

  }?>
