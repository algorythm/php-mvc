<?php
  /**
   * This is the Help Controller. This help controller is mostly for testing.
   */
  class Help extends Controller
  {

    function __construct()
    {
      parent::__construct();
      echo 'This is inside the help controller.<br/>';
    }

    function index() {
      $this->view->render('help/index');
    }

    public function other($arg = false)
    {
      //require 'models/help_model.php';
      //$model = new Help_Model();
      echo 'Isn\'t the help good enough for you? :(<br/>';
      echo '<hr/><a href="../help">[back]</a>';
      if (!empty($arg)) {
        echo "<br/>Optional: $arg";
      }
      $this->view->blah = $model->blah();
    }
  }

?>
