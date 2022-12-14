<?php

   $matches = [
      [
         "casa" => "Varese",
         "ospite" => "Juventus",
         "casaPunti" => 33,
         "ospitePunti" => 44
      ],
      [
         "casa" => "Stella Azzurra",
         "ospite" => "Virtus Trieste",
         "casaPunti" => 30,
         "ospitePunti" => 51
      ],
      [
         "casa" => "Stella Azzurra",
         "ospite" => "Treviso",
         "casaPunti" => 22,
         "ospitePunti" => 22
      ],
      [
         "casa" => "Varese",
         "ospite" => "Stella Azzurra",
         "casaPunti" => 41,
         "ospitePunti" => 34
      ],
      [
         "casa" => "Juventus",
         "ospite" => "Juvecaserta",
         "casaPunti" => 32,
         "ospitePunti" => 35
      ],
      [
         "casa" => "Virtus Trieste",
         "ospite" => "Varese",
         "casaPunti" => 50,
         "ospitePunti" => 60
      ],
      [
         "casa" => "Olimpia Milano",
         "ospite" => "Juvecaserta",
         "casaPunti" => 62,
         "ospitePunti" => 71
      ],
      [
         "casa" => "Olimpia Milano",
         "ospite" => "Virtus Roma",
         "casaPunti" => 72,
         "ospitePunti" => 79
      ],
      [
         "casa" => "Treviso",
         "ospite" => "Olimpia Milano",
         "casaPunti" => 55,
         "ospitePunti" => 51
      ],
      [
         "casa" => "Trieste",
         "ospite" => "Virtus Roma",
         "casaPunti" => 20,
         "ospitePunti" => 30
      ]
   ]

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php
         for ($i = 0; $i < count($matches); $i++) {
            // Olimpia Stella Azzurrao - Cantù | 55 - 60
            $match = $matches[$i];
            echo $match["casa"] . " - " . $match["ospite"] . " | " . $match["casaPunti"] ."-". $match["ospitePunti"] . "<br>";
            // var_dump($match);
         }
         '<pre>' . print_r($my_array, true) . '</pre>';
         
      ?>
</body>
</html>