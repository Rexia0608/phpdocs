<?php
    function patternNumber1($i){
        return $i + 2;
    }
    function patternNumber2($i){
        return ($i + 2) * 2;
    }
    function patternNumber3($i){
        return ($i + 2) * 3;
    }
    function patternNumber4($i){
        return ($i + 2) * 4;
    }
    function patternNumber5($i){
        return ($i + 2) * 5;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bingo Revisited</title>
    </head>
    <style>
        *{
            padding: 0;
            margin: 0;
            outline: 1px solid black;
        }
        table{
            margin: 0 auto;
            margin-top: 150px;
            width: 500px;
            height: 300px;
        }
        td,th{
            text-align: center;
        }
        tr:nth-child(odd){
            background-color: #ff0000;
        }
        tr:nth-child(even){
            background-color: #0c005a;
        }
        tr:first-child{
            font-weight: bold; 
        }
    </style>
    <body>
        <table>
            <tr>
                <th>B</th>
                <th>I</th>
                <th>N</th>
                <th>G</th>
                <th>O</th>
            </tr>
<?php      for($i = 0; $i <= 4;$i++){          ?>
            <tr>
                <td><?= patternNumber1($i) ?></td>
                <td><?= patternNumber2($i) ?></td>
                <td><?= patternNumber3($i) ?></td>
                <td><?= patternNumber4($i) ?></td>
                <td><?= patternNumber5($i) ?></td>
            </tr>
<?php       } ?>
        </table>
    </body>
</html>