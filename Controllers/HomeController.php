<?php

    /*
     * Site Institucional com estrutura MVC
     */

    class HomeController extends Controller {
        
        public function index() {
            $viewData = array();
            
            
            $this->TemplateView("home", $viewData);
        }
        
        
        
        
    }

?>
