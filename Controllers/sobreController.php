<?php

    /*
     * Site Institucional com estrutura MVC
     */

    class SobreController extends Controller {


        public function index() {
            $viewData = array();
            
            $portifolio = new PortifolioModels();
            $viewData['portifolio'] = $portifolio->getTrabalhos();
            
            $this->TemplateView("sobre", $viewData);
        }
        
        
    }

?>
