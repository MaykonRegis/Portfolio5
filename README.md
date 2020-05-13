# Portfolio5
 Projeto desenvolvido no curso de analise e desenvolvimento de sistema

O sistema que foi proposto Alberto caminhava por uma rua próxima a sua casa e em um terreno baldio viu vários
entulhos. Preocupado com a dengue e como o terreno não tinha muros, ele resolveu verificar se não
havia criadouros do mosquito  Aedes aegypti. Para seu desespero, havia um pneu e três garrafas de
água com diversas larvas do provável mosquito. Imediatamente tirou a água dos pneus e dos
recipientes, mas ficou muito apreensivo com essa situação. A dengue mata e estava muito perto da
sua casa. Hoje ele resolveu aquele problema pontual, mas como continuar com essa vigilância?
Com esses questionamentos ele fez uma pesquisa e soube que na empresa DEV-TI, composta
de vários egressos e alunos de Análise e Desenvolvimento de Sistemas (ADS) está com um projeto
em execução para o desenvolvimento de um software para o Ministério da Saúde chamado Sistema
Zer@Dengue, no qual qualquer pessoa poderá fazer uma denúncia de possíveis focos de dengue em 
PRODUÇÃO TEXTUAL
INTERDISCIPLINAR
INDIVIDUAL – PTI
Tecnologia em Análise e Desenvolvimento de Sistemas
todo território nacional. Bastará acessar o sistema Zer@Dengue, criar uma conta e fazer um
descritivo do problema, indicando o endereço da ocorrência, inclusive podendo enviar fotos, sendo
que, posteriormente o usuário receberá um relato da ação tomada pelo Ministério da Saúde

Projeto foi desenvolvido com o padrão mvc entao para usar tem que usar as regras do padrão adotado.

Para funcionar o sistema e preciso ter instalado o composer, também tem que 
ter instalado na maquina um servido local, no meu caso eu usei o xamp, ter também
o mysql e fazer a importação do banco, para abri também os diagramas e preciso ter
o programa astah e o brmodelo para visualização. 


passo: a passo para instalar o composer e usar
1-passo: instalar o composer por esse link: https://getcomposer.org/
2-passo: na pasta do projeto criar o arquivo composer.json
3-passo: baixar o arquivo composer.phar e colar no projeto atraves do site https://packagist.org/
3-passo: abre o cmd na pasta do projeto e instala esse arquivo: php composer.phar install 
4-passo: instalar o twig no cmd na pasta do proejto com esse comando: composer require twig/twig
5-passo: acessar o site packagist.org e copiar o comando e colar no arquivo composer.json
{
    "require": {
       "twig/twig": "^3.0"
    }
}
6-passo: no site https://packagist.org/ no campo de pesquisa coloca twig clica no twig/twig la em baixo vai ter documentatition no leia-me clica, depois twig for developers e copia o codigo e coloca na controller, esse comando. link para acessa direto https://twig.symfony.com/doc/3.x/api.html

$loader = new \Twig\Loader\FilesystemLoader('/path/to/templates');
$twig = new \Twig\Environment($loader, 
$template = $twig->load('index.html');

7-passo: pronto todos os arquivos necessarios para comecar o projeto
