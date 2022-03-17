<?php // Data da Ultima Revisao: 2019-02-20

error_reporting(E_ALL);
ini_set("display_errors", FALSE);
ini_set("log_errors", 1);
ini_set("error_log", __DIR__ . "/../logs/error_logs");
if (stripos($_SERVER["SERVER_NAME"],".nerdpress.") !== FALSE ||
    stripos($_SERVER["SERVER_NAME"], ".nerdweb") !== FALSE ) {
        // Caso detecte que esta em um servidor de homologacao habilita erros,
        // senao ele grava os erros na pasta de erros do apache
        ini_set("display_errors", TRUE);
        ini_set('xdebug.var_display_max_depth', 10);
        ini_set('xdebug.var_display_max_children', 256);
        ini_set('xdebug.var_display_max_data', 1024);
        define("DEVELOPMENT_SERVER", TRUE);
} else {
    // Estamos rodando em producao
    define("DEVELOPMENT_SERVER", FALSE);
}

$configDB["User"] = getenv("db_User");
$configDB["Pass"] = getenv("db_Password");
$configDB["Name"] = getenv("db_Database");
$configDB["Host"] = getenv("db_Host");
$configDB["Port"] = 3306; // A porta eh padrao sempre

/*
* Configurações
*/
setlocale( LC_ALL, 'pt_BR.utf-8', 'pt_BR', 'Portuguese_Brazil');
date_default_timezone_set('America/Sao_Paulo');


// Fallback de configuracoes do banco, caso nao tenha no example.htaccess ou virtualhost
if (file_exists(__DIR__ . '/config_fallback.php')){
    require_once __DIR__ . '/config_fallback.php';
}

// Checagem pra ver se existem as configuracoes do banco, caso nao exista mata o processo e mostra mensagem de erro
if ($configDB["User"] === FALSE ||
    $configDB["Pass"] === FALSE ||
    $configDB["Host"] === FALSE ||
    $configDB["Name"] === FALSE) {
    foreach ($configDB as $nomeCampo =>  $item) {
        if ($item === FALSE) {
            echo $nomeCampo . " NAO FOI CORRETAMENTE SETADO<br>" . PHP_EOL;
        }
    }
    die("<br>Configure corretamente os acessos ao banco.<br>" . PHP_EOL);
}
