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
  
  $numberList1 = array(1,2,3,4);
  $numberList2 = [1,2,3,4,"<h1>hello world</h1>", "vitor"];

  echo $numberList2[4];
  ?>
</body>
</html>