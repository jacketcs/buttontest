<?php
  $countFile = 'click_count.txt';
  
  // Increment click count
  if (file_exists($countFile)) {
    $count = intval(file_get_contents($countFile));
    $count++;
  } else {
    $count = 1;
  }
  file_put_contents($countFile, $count);
  
  echo $count; // Send the updated count back to the client
?>
