<?php

class PortifolioModels extends model {
    
    public function __construct() {
        parent::__construct();
    }
            
    function getTrabalhos($quantos = '') {
        
        $trabalhos = array();
        $sqlComando = "SELECT * FROM fotos ";
        
        if (!empty($quantos)) {
            $sqlComando .= "LIMIT ".$quantos;
        }
        $sqlComando = $this->dbConexao->query($sqlComando);
        if ( $sqlComando->rowCount() > 0 ) {
            $trabalhos = $sqlComando->fetchAll();
        }
        
        return $trabalhos;
        
    }
    
    
}