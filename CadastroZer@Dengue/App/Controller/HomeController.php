<?php
    class HomeController {
        public function index(){
              
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader,);
            $template = $twig->load('home.html');
    
            $paramentro = array();
            $conteudo = $template->render($paramentro); // ARMAZENA ESSE CONTEUDO DA HOME NUMA VARIAVEL 
             echo $conteudo; // COMANDO PARA EXIBIR O CONTEUDO DE HOME 
                
            
            
        }
    }


?>