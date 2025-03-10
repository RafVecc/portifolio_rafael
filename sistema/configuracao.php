<?php

use sistema\Nucleo\Helpers;

//Arquivo de configuração do sistema
//define o fuso horario
date_default_timezone_set('America/Sao_Paulo');



//informações do sistema
define('SITE_NOME', 'Gapi');
define('SITE_DESCRICAO', 'Sistema de Gerenciamento de Atividades da Pessoa Idosa');

//urls do sistema
define('URL_PRODUCAO', 'https://gapi-homologa.salvador.ba.gov.br');
define('URL_DESENVOLVIMENTO', 'http://localhost/gapi');



if (Helpers::localhost()) {
    //dados de acesso ao banco de dados em localhost
    define('DB_HOST', 'localhost');
    define('DB_PORTA', '3306');
    define('DB_NOME', 'gapi');
    define('DB_USUARIO', 'root');
    define('DB_SENHA', '');

    define('DB_HOST_SIGEBE', '177.20.4.61');
    define('DB_PORTA_SIGEBE', '3306');
    define('DB_NOME_SIGEBE', 'semps_db_sige');
    define('DB_USUARIO_SIGEBE', 'sige');
    define('DB_SENHA_SIGEBE', 'XcSems1ge!');

    define('URL_SITE', 'gapi/');
    define('URL_ADMIN', 'gapi/admin/');
} else {
    //dados de acesso ao banco de dados na hospedagem
    define('DB_HOST', '177.20.4.234');
    define('DB_PORTA', '3306');
    define('DB_NOME', 'bd_gapi');
    define('DB_USUARIO', 'usr_gapi');
    define('DB_SENHA', 'C2u&hEL?9do2');

    define('DB_HOST_SIGEBE', '177.20.4.61');
    define('DB_PORTA_SIGEBE', '3306');
    define('DB_NOME_SIGEBE', 'semps_db_sige');
    define('DB_USUARIO_SIGEBE', 'sige');
    define('DB_SENHA_SIGEBE', 'XcSems1ge!');

    define('URL_SITE', '/');
    define('URL_ADMIN', '/admin/');
}

//autenticação do servidor de emails
define('EMAIL_HOST', 'smtp-mail.outlook.com');
define('EMAIL_PORTA', '587');
define('EMAIL_USUARIO', ''); // email para envio dos e-mails
define('EMAIL_SENHA', ''); //  senha da conta de email acima
define('EMAIL_REMETENTE', ['email' => EMAIL_USUARIO, 'nome' => SITE_NOME]);

