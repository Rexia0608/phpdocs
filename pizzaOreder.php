<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pizza Order</title>
    </head>
    <body>
        <ol>
<?php
            function print_order($x){
                for ($i = 0; $i < count($x); $i++) {
                    echo "<li>$x[$i]</li>";
                }
            }
            $x = array('Spaghetti', 'Pizza', 'Iced tea');
            print_order($x);
?>       
      </ol>
    </body>
</html>