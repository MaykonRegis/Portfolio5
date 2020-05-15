<?php

// FAZENDO A CONEXAO COM O BANCO DE DADOS
    try{
        $pdo = new PDO('mysql: host=localhost; dbname=cadastro;', 'root', ''); 
    }catch(PDOException $e){
        echo "ERRO COM BANCO DE DADOS".$e->getMessage();
    }catch(Exception $e){
        echo "ERRO generico:".$e->getMessage();
    }


?>