<?php
    class DenunciaController {
        public function index(){
              
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader,);
            $template = $twig->load('denuncia.html');
    
            $paramentro = array();
            $conteudo = $template->render($paramentro); // ARMAZENA ESSE CONTEUDO DA HOME NUMA VARIAVEL 
            echo $conteudo; // COMANDO PARA EXIBIR O CONTEUDO DE HOME        
        }

        public function denunciar(){
            try{
                Denuncia::denunciar($_POST);

                echo '<script>alert("Denuncia efetuado com sucesso!");</script>';
                echo '<script>Location.href="http://localhost/CadastroZer@Dengue/?pagina=denuncia&metodo=denunciar"</script>';
            }catch(Exception $e){
                echo '<script>alert("' .$e->getMessage(). '");</script>';
                echo '<script>Location.href="http://localhost/CadastroZer@Dengue/?pagina=denuncia"</script>';
            }
            
        }


    }


?>

       