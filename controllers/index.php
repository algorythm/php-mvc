<?php
  /**
   * This is the Index Controller
   */
  class Index extends Controller
  {

    function __construct()
    {
      parent::__construct();
    }
    function index()
    {
      $this->view->render('index/index');
    }
  }

?>
