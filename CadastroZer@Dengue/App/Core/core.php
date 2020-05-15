<?php
    class core {
        public function start($urlGet){
            if(isset($urlGet['metodo'])){
                $acao = $urlGet['metodo'];
            }else{
                $acao = 'index';  //COMANDO QUE ESTA PUXANDO O METODO INDEX DOS CONTROLLER   
            }

            if(isset($urlGet['pagina'])){ // COMANDO PARA SE ELE NAO ACESSA NENHUMA PAGINA ABRA NA PAGINA HOME
                $controller = ucfirst($urlGet['pagina'].'Controller'); // COMANDO PARA CONTROLAR QUAL PAGINA ESTA SENDO ACESSADO PELO USUARIO
            }else {
                $controller = 'HomeController';
            }
            
             
             
             
            //COMANDO PARA VERIFICAR SE O CONTROLLER OU A PAGINA EXISTE
            if(!class_exists($controller)){
                $controller = 'ERROCONTROLLER';
            }

            if(isset($urlGet['id']) && $urlGet['id'] != null) {
                $id = $urlGet['id'];
            }else {
                $id = null;
            }

            //ESSE COMANDO ESTA CHAMANDO AS FUNCAOS DOS CONTROLER E EXIBINDO DE FORMA DINAMICA HOMECONTROLLER.PHP O CHAMANDO HOME
            call_user_func_array(array(new $controller, $acao), array('id' => $id));
        }
    }
?>