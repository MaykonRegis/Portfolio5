<?php
    class Denuncia{
        public static function denunciar(){
            include 'conexao.php';
            $sendCadCont = filter_input(INPUT_POST, 'cadastrar', FILTER_SANITIZE_STRING);
            if($sendCadCont){
                $endereco = filter_input(INPUT_POST, 'endereço_oco', FILTER_SANITIZE_STRING);
                $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
                $imagen = $_FILES['imagen'] ['name'];
        
                $resultado = "INSERT INTO denuncia (endereço_oco, descricao, imagen) VALUES (:ende, :descr, :imagen)";
        
                $cmd = $pdo->prepare($resultado);
                $cmd->bindParam(':ende',$endereco);
                $cmd->bindParam(':descr',$descricao);
                $cmd->bindParam(':imagen', $imagen);
                $res = $cmd->execute();
                var_dump($res);

                if($cmd->execute()){
                    $ultimo_id = $pdo->lastInsertId();
                    $diretorio = 'imagens/' . $ultimo_id.'/';
                    mkdir($diretorio, 0755);
                    move_uploaded_file($_FILES['imagen'] ['tmp_name'], $diretorio.$imagen);
                }

                if($res == 0){
                    throw new Exception("FALHA AO INSERIR OS DADOS");
                    return false;
                }   

                return true;
                    
            }
            
        }
            




    }
    
    


?>