<?php
session_start();

require 'config.php';

    spl_autoload_register(function($class) {
        
       if (strpos($class, "Controller") > -1) {
           if (file_exists("Controllers/".$class.".php")) {
               require_once("Controllers/".$class.'.php');
           }
       } elseif ( strpos($class, "Models") > -1 ) {
            if (file_exists("Models/".$class.".php")) {
               require_once("Models/".$class.'.php');
           }
       }
       elseif (file_exists("Core/".$class.".php")) {
               require_once("Core/".$class.'.php');
           }
           
       }
        
    );
    
    $core = new Core();
    $core->process();
            


?>
