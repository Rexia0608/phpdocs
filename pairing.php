<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pairing</title>
    </head>
    <body>
<?php       
    $cards = array(
        array("King" . "<br>" => "The value of King in Pyramid Solitaire is 13."),
        array("Queen" . "<br>" => "The value of Queen in Pyramid Solitaire is 12." . "<br>"),
        array("Jack" . "<br>" => "The value of Jack in Pyramid Solitaire is 11." . "<br>"),
        array("Ace" . "<br>" => "The value of Ace in Pyramid Solitaire is 1." . "<br>")
    );
    function decksofCards($cards){
        echo "<p>List of keys in the array:</p>";
        function cardValue($cards){
            echo "<ul>";
            foreach($cards as $card)
            {
                foreach($card as $rank => $value)
                {
                    echo "<li>$rank</li>"; 
                }
            }
            echo "</ul>";
        }
        function cardDescription($cards){
            echo "<br>";
            foreach($cards as $card)
            {
                foreach($card as $rank => $value)
                {
                    echo "<p>$value</p>"; 
                }
            }
        }
        cardValue($cards);
        cardDescription($cards); 
    }
    decksofCards($cards);
?>       
    </body>
</html>