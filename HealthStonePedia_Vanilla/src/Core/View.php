<?php
    namespace App\Core;
    
    class View {
        public function __construct(string $view, array $data = null) {   //$view (parametro) es el valor de la variable que está en la View de src: stonelist.phm
            require_once ("src/Views/$view.php");
            
        }
    }
?>