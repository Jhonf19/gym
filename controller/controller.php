<?php
require_once('model/model.php');
session_start();
class Controller{

  function __construct(){
    $this->obj = new Model();
  }

  function index(){

    if (isset($_SESSION['admin'])) {
      include_once('view/templates/head.php');
      include_once('view/cpanel.php');
      include_once('view/templates/foot.php');
    }else {
    include_once('view/templates/head.php');
    include_once('view/log.php');
    include_once('view/templates/foot.php');
    }
  }

  function closeSession(){
    unset($_SESSION['admin']);
    $this->index();
  }

  function login(){

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $res = $this->obj->userVerify($user, $pass);
    if ($res->num_rows) {
      $_SESSION['admin']='active';
      header('location:?w=cpanel');
    }else {
      header('location:?');
    }
  }

  function cpanel(){
    if (isset($_SESSION['admin'])) {
      include_once('view/templates/head.php');
      include_once('view/cpanel.php');
      include_once('view/templates/foot.php');
    }else {
      header('location:?');
    }
  }

}
 ?>
