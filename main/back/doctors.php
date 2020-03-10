<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){

    include_once "config.php";
    $cur = new Config();

  $names =    $_POST['names'];
  $email =    $_POST['email'];
  $phone =    $_POST['phone'];
  $Specialty =    $_POST['Specialty'];
  $district =    $_POST['district'];
  $address =    $_POST['address'];

  // $username = $_POST['username'];
  // $password = $_POST['password'];

  // echo $names . $email . $phone . $Specialty . $district . $address;
  $cur->add_doctor($names, $email, $phone, $Specialty, $address, $district);

  $cur->create_user($names, $email);

  }

?>
