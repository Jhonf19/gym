<?php
require_once('controller/controller.php');
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

  $controller = new Controller();

  if (!empty($_REQUEST['w'])) {
    $url = $_REQUEST['w'];
    if (method_exists($controller, $url)) {
      $controller->$url();
    }else {
      $controller->index();
    }
  }else {
    $controller->index();
  }
 ?>
