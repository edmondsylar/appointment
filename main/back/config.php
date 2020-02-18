<?php
  /**
   *
   */
  class Config
  {
    public $conn;

    function __construct()
    {
      // this is the functino constructor;
      define('DB_SERVER', 'localhost');
      define('DB_USERNAME', 'dev');
      define('DB_PASSWORD', 'password');
      define('DB_NAME', 'appoint');

      $this->conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
      if($this->conn === true){ echo "App not loving your connection"; }
  }

  function apoint($s,$p,$f,$e,$ph,$n,$d){
    // $book = "INSERT INTO (`service`, `Provider`, `Fullname`, `email`, `Phone`, `Notes`, `district`) values ('service', 'provider', 'email', 'phone', 'notes', 'district')";
    $book = "INSERT INTO appointments(`service`, `Provider`, `Fullname`, `email`, `Phone`, `Notes`, `district`) VALUES ('$s', '$p', '$f', '$e', '$ph', '$n', '$d')";
    $qery = mysqli_query($this->conn, $book);

    if($qery === false){
      echo mysqli_error($this->conn);
    } else {
      header("Location: ../payments.php?email=". $e);
    }
  }

  function add_doctor($name, $mail, $phone, $spec, $address, $district){
    $make_doc = "INSERT INTO doctors(`fullname`, `email`, `Phone`, `specialty`, `address`, `district`) VALUES ('$name', '$mail', '$phone', '$spec', '$address', '$district')";
    $q = mysqli_query($this->conn, $make_doc);

    if($q === false){
      echo mysqli_error($this->conn);
    } else {
      $mk_dist = "REPLACE INTO districts(`name`) VALUES ('$district')";
      if(mysqli_query($this->conn, $mk_dist)){
        header("Location: ../../doctors.php");
      }else {
        echo mysqli_error($this->conn);
      }


    }

  }

  function get_districts(){
    $get = "SELECT * from districts";
    $q = mysqli_query($this->conn, $get);
    $results = ($q);

    return $results;
  }



  function get_specs($dist){
    $get = "SELECT * FROM doctors";
    $q = mysqli_query($this->conn, $get);
    $results = ($q);

    return $results;
  }


  function get_pro($d, $s){
    $get = "SELECT fullname from doctors where district='$d', and specialty='$s'";
    $q = mysqli_query($this->conn, $get);
    $results = ($q);

    return $results;

  }

  function get_appointments()
    {
      $apps = "SELECT * FROM appointments";
      $q = mysqli_query($this->conn, $apps);
      $results = ($q);

      return $results;

    }



  //end of function
 }
?>
