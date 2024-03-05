<?php
   function exponential($arr)
   {
       $result = array(); 
       for ($i = 0; $i < count($arr); $i++)
       {
           $result[] = $arr[$i] ** 3;
        //    echo "$result[$i]" . " ";
       }
       return $result; 
   }
   
   $digits = array(3, 12, 30);
   $result = exponential($digits);
   var_dump($result);
?>
