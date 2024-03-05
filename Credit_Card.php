<?php
    $users = array( 
        array('cardholder_name'=> 'Michael Choi', 'cvc' => 123, 'acc_num' => '1234 5678 9876 5432'),
        array('cardholder_name'=> 'John Supsupin', 'cvc' => 789, 'acc_num' => '0001 1200 1500 1510'),
        array('cardholder_name'=> 'KB Tonel', 'cvc' => 567, 'acc_num' => '4568 456 123 5214'),
        array('cardholder_name'=> 'Mark Guillen', 'cvc' => 345, 'acc_num' => '123 123 123 123') 
    );

    function convertToUpper($value){
        return strtoupper($value);
    }

    function generateRandomNum(){
        return mt_rand(100, 999);
    }

    function countAccNumLength($acc_num){
        $acc_num = preg_replace("/[^0-9]/", "", $acc_num);
        return strlen($acc_num);
    }

    function identifyArrayNumber($array){
        global $users;
        return array_search($array, $users);
    }

    function trueOrFalse($acc_num){
        $length = countAccNumLength($acc_num);
        return $length >= 15;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Credit Card</title>
        <style>
            * {
                padding: 0;
                margin: 0;
                outline: 1px solid black;
            }
            table {
                margin: 0 auto;
                margin-top: 20px;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Name in Uppercase</th>
                <th>Account Number</th>
                <th>CVC Number</th>
                <th>Full Account</th>
                <th>Length of Full Account</th>
                <th>is valid</th>
            </tr>
            <?php foreach ($users as $key => $user): ?>
                <tr>
                    <td><?= $key; ?></td>
                    <td><?= $user['cardholder_name']; ?></td>
                    <td><?= convertToUpper($user['cardholder_name']); ?></td>
                    <td><?= $user['acc_num']; ?></td>
                    <td><?= $user['cvc']; ?></td>
                    <td><?= $user['acc_num'] . generateRandomNum(); ?></td>
                    <td><?= countAccNumLength($user['acc_num']); ?></td>
                    <td><?= trueOrFalse($user['acc_num']) ? 'True' : 'False'; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
