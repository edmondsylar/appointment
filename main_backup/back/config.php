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




  //end of function
 }
?>
