<?php 
  if(isset($_POST['OK'])){

    $names = ["Vítor", "Pedro", "Lucas", "Davi"];

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < 3){
      echo "your username has to be 3 or more chracters";
    }

    if (!in_array($username, $names)){
      echo "$username, you are not sign up";
    } else {
      echo "welcome $username";
    }
  }
  ?>