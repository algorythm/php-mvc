<?php
/**
 * Login Controller
 */
class Login extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->view->render('login/index');
  }

  function login () // "run" in the tutorial.
  {
      $this->model->login();
  }
}

?>
