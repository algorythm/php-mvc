<?php
   /**
    * View
    */
   class View
   {
     function __construct()
     {
       //echo "This is the view." . "<br/>";
     }

     public function render($name, $noInclude = true)
     {
        if ($noInclude == false) {
          require 'views/' . $name . '.php';
        } else {
          require 'views/header.php';
          require 'views/' . $name . '.php';
          require 'views/footer.php';
        }
     }
   }

?>
