<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Language</title>
    </head>
    <body>
        <select>
        <?php
            $languages = array('PHP', 'JS', 'Ruby');
            for($i = 0; $i < count($languages); $i++)
            {
               echo "<option>$languages[$i]</option>";
            };
        ?>
        </select>
        <select>
        <?php
        array_push($languages, "HTML", "CSS");
         foreach($languages as $value)
         {
          echo "<option>$value</option>";
         }
        ?>
        </select>
    </body>
</html>