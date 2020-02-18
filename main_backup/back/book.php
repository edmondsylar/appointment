<?php

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    include_once "config.php";
    $cur = new Config();

    $f = $_POST['names'];
    $e = $_POST['email'];
    $ph = $_POST['phone'];
    $d = $_POST['district'];
    $s = $_POST['service'];
    $p = $_POST['provider'];
    $n = $_POST['description'];

    $cur->apoint($s, $p, $f, $e, $ph, $n, $d);
    // echo ($s . $p . $f . $e . $ph . $n . $d);

  }

 ?>
