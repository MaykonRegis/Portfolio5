<?php

    class CadastroController {

        public function index(){
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader,);
            $template = $twig->load('cadastro.html');
    
            $paramentro = array();
            $conteudo = $template->render($paramentro); // ARMAZENA ESSE CONTEUDO DA HOME NUMA VARIAVEL 
             echo $conteudo; // COMANDO PARA EXIBIR O CONTEUDO DE HOME 
                
            
            
        } // COMANDO PARA EXIBIR O CONTEUDO DE HOME 

        

        public function insert(){
            try{
                Cadpessoa::insert($_POST);

                echo '<script>alert("Cadastro efetuado com sucesso!");</script>';
                echo '<script>Location.href="http://localhost/CadastroZer@Dengue/?pagina=login"</script>';
            }catch(Exception $e){
                echo '<script>alert("' .$e->getMessage(). '");</script>';
                echo '<script>Location.href="http://localhost/CadastroZer@Dengue/?pagina=cadastro&metodo=insert"</script>';
            }
            
        }
        
    }
    
