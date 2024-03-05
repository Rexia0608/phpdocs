<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shoot the ball</title>
    </head>
    <body>
<?php
                $attempt = 0;
                $score = 0;
                $miss = 0;
                $test = 1000;
                for ($attempt = 1; $attempt <= $test; $attempt++){
                    $probability = random_int(0, 1);
                    if ($probability == 1){
                        $score++;
                        echo "Attempt #{$attempt}: Shooting the ball... Success!... Got {$score}x success and {$miss}x epic fail<br>";
                    }else if($probability == 0){
                        $miss++;
                        echo "Attempt #{$attempt}: Shooting the ball... Epic Fail!... Got {$score}x success and {$miss}x epic fail<br>";
                    }
                }  
?>
    </body>
</html>