<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shoot the ball</title>
    </head>
    <body>
<?php
     function get_count($binary){
        $count = array(
            'ones' => 0,
            'zeroes' => 0
        );
    
        foreach ($binary as $value){
            if ($value == 1){
                $count['ones']++;
            }elseif ($value == 0){
                $count['zeroes']++;
            }
        }
    
        foreach ($count as $key => $value){
            echo $key . ": " . $value . "<br>";
        }
    
        return $count;
    }
    
    $binary = array(1, 1, 0, 1, 1, 1, 1);
    $output = get_count($binary);        
?>

        
    </body>
</html>