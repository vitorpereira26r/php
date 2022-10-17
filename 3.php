<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  /*
  step 1: make an if statemant with elseif and else to display string saying "my name is vitor"
  step 2: make for loop that displays 10 numbers
  step 3: make a switch that againts one condition with 5 cases
  */
  $name = "Vítor";
  // step 1
  if (1>2){
    echo "no";
  } else if (1=="1"){
    echo "my name is $name" . "<br>";
  } else {
    echo "nothing";
  }

  // step 2
  for ($count = 1; $count <= 10; $count++){
    echo $count . " ";
  }

  echo "<br>";

  // step 3
  $x = 5;

  switch ($x){
    case 1:
      echo 1;
      break;
    case 2:
      echo 2;
      break;
    case 3:
      echo 3;
      break;
    case 4:
      echo 4;
      break;
    case 5:
      echo 5;
      break;
    default:
      echo "none";
  }
  echo "<br>";

  ?>
</body>
</html>