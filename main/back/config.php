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

  function login($email, $pass){
    $password = md5($pass);
    $login = "SELECT * FROM doctors WHERE email='$email' AND password='$password'";
    $res = mysqli_fetch_assoc(mysqli_query($this->conn, $login));

    if($res['id']){
      session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $res['email'];
        $_SESSION["name"] = $res['fullname'];

        echo $_SESSION['name'];
       header("Location: ../doclist.php");

    }
  }

  function apoint_one($f, $e, $ph, $n, $date){
    $id = uniqid('', true);
    $sql = "INSERT INTO appointments(`id`,`Fullname`, `email`, `Phone`, `Notes`, `date`) VALUES ('$id', '$f', '$e', '$ph', '$n', '$date')";
    if(mysqli_query($this->conn, $sql)){
      return header('Location: ../district.php?id='. $id .'&start');
    }else{
      return header("Location: ../index.php");
    }
  }

  function add_doctor($name, $mail, $phone, $spec, $address, $district){
    $password = md5('password');
    $make_doc = "INSERT INTO doctors(`fullname`, `email`, `Phone`, `specialty`, `address`, `district`, `password`) VALUES ('$name', '$mail', '$phone', '$spec', '$address', '$district', '$password')";
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
    $get = "SELECT * FROM doctors where district='$dist'";
    $q = mysqli_query($this->conn, $get);
    $results = ($q);

    return $results;
  }


  function get_pro($d, $s){
    $get = "SELECT * from doctors where district='$d' AND specialty='$s'";
    $q = mysqli_query($this->conn, $get);
    $results = ($q);

    return $results;

  }

  function complete_book($id, $loc, $service, $doc){
    $sql = "UPDATE appointments SET district='$loc', service='$service', Provider='$doc' where id='$id'";
    if(mysqli_query($this->conn, $sql)){
      $done = "SELECT email from appointments where id='$id'";
      $res = mysqli_fetch_assoc(mysqli_query($this->conn, $done));
      if($res){
      header("Location: ../payments.php?email=".$res['email']);
      }

    }else{
      echo mysqli_error($this->conn);
    }
  }

  function get_appointments($doc)
    {
      $apps = "SELECT * FROM appointments where Provider='$doc'";
      $q = mysqli_query($this->conn, $apps);
      $results = ($q);

      return $results;

    }



  //end of function
 }
?>
