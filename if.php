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
  $x = 9;
  if ($x < 10){
    echo "o numero $x é menor que 10";
  } else if ($x == 10){
    echo "o numero $x é igual a 10";
  } else {
    echo "o numero $x é maior que 10";
  }
  echo "<br>";

  if (4 == "4"){
    echo 'int 4 is equal to string "4"';
  }
  echo "<br>";
  if (4 === "4"){
    echo 'int 4 is identical to string "4"';
  } else {
    echo 'int 4 isnt identical to string "4"';
  }

  echo "<br>";

  $number = 1;

  switch($number){
    case 10:
      echo "equal to 10" . "<br>";
      break;
    case 11:
      echo "equal to 11" . "<br>";
      break;
    default:
      echo "could find the number";
      break;
  } 

  ?>

</body>
</html>