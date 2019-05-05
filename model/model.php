<?php
class Model{
  private $req;
  private $res;

  function hola(){
    echo "jaja";
  }

  function userVerify($user, $pass){
    include('model/mysql.php');
    $query = "SELECT * FROM users WHERE user='$user' AND password='$pass'";
    $result = mysqli_query($conn, $query);

    return $result;

  }

}
 ?>
