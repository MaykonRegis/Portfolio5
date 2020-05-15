<?php

require_once 'App/Core/core.php';

require_once 'App/Controller/ErroController.php';
require_once 'App/Controller/DenunciaController.php';
require_once 'App/Controller/CadastroController.php';
require_once 'App/Controller/loginController.php';
require_once 'App/Controller/HomeController.php';

require_once 'lib/database/connection.php';

require_once 'App/Model/cadpessoa.php';
require_once 'App/Model/denuncia.php';
require_once 'App/Model/Login.php';

require_once 'vendor/autoload.php';


// COAMDNO PARA PUXAR E EXIBIR A
$template = file_get_contents('App/template/estrutura.html');

ob_start(); // COMANDO PARA DIRECIONAR PRA AREA DINAMICA
//CHAMANDO O CORE 
$core = new Core;
$core->start($_GET);
//CHAMANDO A FUNCAO START DO CORE
$saida = ob_get_contents(); // COMANDO PARA ARMAZENA O CONTEUDO
ob_end_clean();

$tplpronto = str_replace('{{area_dinamica}}', $saida, $template); // COMANDI IRA EXIBIR O CONTEUDO NA AREA MARCADA
echo $tplpronto; // COMANDO PARA MOSTRAR A ESTRUTURA 
?>