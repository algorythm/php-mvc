<?php
  /**
   * Error Controller
   */
  class Error extends Controller
  {
    function __construct($errException)
    {
      parent::__construct();
    }

    function index()
    {
      $this->view->msg = '404 page not found.';
      $this->view->render('error/index');
    }
  }

?>
