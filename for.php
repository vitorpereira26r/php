<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  for ($counter = 1; $counter <= 10; $counter++){
    echo $counter . "<br>";
  }

  $numbers = [1,2,3,4,5,6,7,8,9,10];

  foreach ($numbers as $number){
    echo $number . "<br>";
  }

  ?>
</body>
</html>