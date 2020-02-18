<?php
  include_once "../main/back/config.php";
  $cur = new Config();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $user = $_POST['email'];
    $password = $_POST['password'];

    // echo $user. " ". $password;
    $cur->login($user, $password);

  }

 ?>
