<?php
class Model{
  private $req;
  private $res;

  function hola(){
    echo "jaja";
  }

  function userVerify($user, $pass){
    include('model/mysql.php');
    $query = "SELECT * FROM personas WHERE documento='$user' AND password='$pass'";
    $result = mysqli_query($conn, $query);
    $res = mysqli_fetch_array($result);
    return $res;

  }

  function listClients(){
    include('model/mysql.php');
    $query = "SELECT * FROM personas WHERE  rol=3";
    $result = mysqli_query($conn, $query);
    // $res = mysqli_fetch_array($result);
    return $result;
  }

}
 ?>
