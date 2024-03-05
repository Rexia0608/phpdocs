<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Karaoke</title>
    </head>
    <body>
<?php
        for($i = 0; $i < 50;$i++){
            $score = random_int(1, 100);
            $rank = array(
                "Score below 50: Never sing again, ever!" => ($score >= 1 && $score < 50),
                "Score below 50 - 79: Practice more!" => ($score >= 51 && $score < 79),
                "Score below 80 - 94:  You're getting better!" => ($score >= 80 && $score < 94),
                "Score below 95 - 100: What an excellent singer!" => ($score >= 95 && $score <= 100)
            );
            foreach ($rank as $message => $condition){
                if ($condition) {
                    echo "<h1>$score</h1>\n";
                    echo "<h2>$message</h2>\n";;
                }
            }
        };   
?>
    </body>
</html>