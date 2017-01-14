<?php

    /*
     * Site Institucional com estrutura MVC
     */

    class PortifolioController extends Controller {
        

        
        public function index() {
            $viewData = array();
            
            $portifolio = new PortifolioModels();
            $viewData['portifolio'] = $portifolio->getTrabalhos();
            
            $this->TemplateView("portifolio", $viewData);
        }
        
        
    }

?>
