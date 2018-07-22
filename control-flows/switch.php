<?php 

  // swtich statement 
  $day = date('l');
  switch($day) {
    case "Monday":
      echo "Oh Boy!!! It's Monday again :(";
      break;
    case "Sunday":
      echo "Oh yeah!!!! We gonna eat rice today!!";
      break;
    default:
      echo "Oh dear!!! Are we still on Planet earth????";
    break;  
  }
?>
