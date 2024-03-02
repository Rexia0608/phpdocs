<?php
   $numbers = [13, 143, 88, 65, 120];
   $sum = 0;
   for ($i = 0; $i < count($numbers); $i++)
   {
       $sum += $numbers[$i];
   }
    $aver = $sum / count($numbers);
    echo "this is the main of array: $aver" . "<br>";
 
?>