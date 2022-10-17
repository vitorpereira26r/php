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
  
  /*
  step 1: define a function and make it return a calculation of two numbers
  step 2: make a function that passes parameters and call it using parameters values
  */
  // step 1
  function calculation ($n1, $n2){
    $some = $n1 + $n2;
    return $some;
  }

  $result = calculation(30, 80);
  echo $result . "<br>";

  // step 2
  function sayHello ($name){
    echo "hello $name"."<br>";
  }

  sayHello("Vitor");
  ?>
</body>
</html>