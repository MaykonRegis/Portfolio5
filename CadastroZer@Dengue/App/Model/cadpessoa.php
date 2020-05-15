<?php
   class Cadpessoa {
      public static function insert(){
            include 'conexao.php';
            $botao = filter_input(INPUT_POST, 'cadastrar', FILTER_SANITIZE_STRING);
            if($botao){
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
                $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
                $rg = filter_input(INPUT_POST, 'RG', FILTER_SANITIZE_STRING);
                $cpf = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
                $endereço = filter_input(INPUT_POST, 'endereço', FILTER_SANITIZE_STRING);
                $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
                $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
                $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
                $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
        
                $inserir = "INSERT INTO cadpessoa (nome, usuario, email, senha, RG, CPF, endereço, telefone, cidade, bairro, estado) VALUES (:n, :u, :e, :s, :R, :C, :en, :t, :c, :b, :es)";
        
                $cad = $pdo->prepare($inserir);
                $cad->bindValue(':n', $nome);
                $cad->bindValue(':u', $usuario);
                $cad->bindValue(':e', $email);
                $cad->bindValue(':s', $senha);
                $cad->bindValue(':R', $rg);
                $cad->bindValue(':C', $cpf);
                $cad->bindValue(':en', $endereço);
                $cad->bindValue(':t', $telefone);
                $cad->bindValue(':c', $cidade);
                $cad->bindValue(':b', $bairro);
                $cad->bindValue(':es', $estado);
                $res = $cad->execute();
                var_dump($res);


                if($res == 0){
                    throw new Exception("FALHA AO INSERIR OS DADOS");
                    return false;
                }   

                return true;

            }    

        }  
   }
    


?>