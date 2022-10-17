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


  function sayMyName ($times){
    for ($count = 1; $count <= $times; $count++){
      echo "Vítor". "<br>";
    }
  }

  function sum($number1, $number2){
    $some = $number1 + $number2;
    return $some;
  }

  sayMyName(2);
  $some = sum(10,2);
  //$some = sum(10, $some);
  echo $some;
  ?>
</body>
</html>