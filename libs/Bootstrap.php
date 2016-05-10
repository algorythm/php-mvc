<?php
  /**
   *
   */
  class Bootstrap
  {
    function __construct()
    {
      $url = isset($_GET['url']) ? $_GET['url'] : null;
      $url = rtrim($url, '/');
      //$url = rtrim($url, '.php'); /* http://workspace/ virker nu, men kan dette måske skabe andre problemer? */ //nu virker http://workspace/help ikke
      $url = explode('/', $url);

      //print_r($url);
      //echo "<br/><br/>";

      if ($url[0] == 'index.php') /* hvis http://workspace/ i stedet for http://workspace/index/ */
      {
        //require 'controllers/index'; /* Her virker http://workspace/ ikke? */
        //$controller = new Index;
        //$controller->index();
        //return false;

        $url[0] = 'index'; 
      }

      $file = 'controllers/' . $url[0] . '.php';
      if (file_exists($file))
      { require $file; }
      else
      {
        require 'controllers/error.php';
        $controller = new Error("The file you entered ($file) does not exist.");
        return false;
      }

      $controller = new $url[0];

      if (isset($url[2])) /* if view AND method (fx: http://workspace/index/testFunction/) */
      {
        if (method_exists($controller, $url[1])) {
          $controller->{$url[1]}($url[2]);
        } else {
          echo 'Error (lines 41-44, libs/Bootstrap.php).';
        }

        return false;
      }
      else
      {
        if (isset($url[1])) /* if only view, NOT method (fx: http://workspace/index/) */
        {
          $controller->{$url[1]}();
          return false;
        } else {
          $controller->index();
        }
      }
    }
  }

 ?>
