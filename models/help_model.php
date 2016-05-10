<?php
  /**
   * Help Model
   */
  class Help_Model extends Model
  {
    function __construct()
    {
      parent::__construct();
      echo "Help model";
    }

    function blah()   // For testing
    {
      return 10 + 10;
    }
  }

?>
