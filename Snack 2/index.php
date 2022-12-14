<?php
   $name = $_GET["name"];
   $mail = $_GET["mail"];
   $age = $_GET["age"];
   $res = "Accesso negato";
   if ( strlen($name) > 2 && strpos($mail, ".") && strpos($mail, "@") && filter_var($age, FILTER_VALIDATE_INT)) {
      $res = "Accesso riuscito";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
 <h1><?php echo $res ?></h1>
 <form action="" method="get">
         <label for="name">Name:</label>
         <input type="text" name="name">
         <label for="mail">E-mail:</label>
         <input type="text" name="mail">
         <label for="age">Age:</label>
         <input type="number" name="age">
         <button>Controlla</button>
      </form>
</body>
</html>