<?php
  for ($i = 1; $i <= 1000; $i ++){
    if ($i % 3 == 0){
        echo " Current number $i => multiple". "<br>";
    }else if(!$i % 3 == 0 ){
        echo " Current number $i => Not multiple" . "<br>";
    }
  }
?>  