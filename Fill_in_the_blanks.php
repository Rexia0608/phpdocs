<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
<?php
    // function convert_to_blanks($list){
    //     foreach($list as $value){
    //         for($i = 0; $i < $value; $i++){
    //             echo "_";
    //         }
    //         echo "<br>";
    //     }
    // }
    // $list = array(6, 1, 3, 5, 7);
    // convert_to_blanks($list);


    function convert_to_blanks($list){
        foreach($list as $value)
        {
            if (is_numeric($value))
            {
                for ($i = 0; $i < $value; $i++)
                {
                    echo "_";
                }
            }else
            {
                echo substr($value, 0, 1);
                echo str_repeat("_", max(strlen($value) - 1, 0));
            }
            echo "<br>";
        }
    }
    
    $list = array(4, "Michael", 3, "Karen", 2, "Rogie");
    convert_to_blanks($list);
    
    
?>
    </body>
</html>