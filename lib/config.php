<?php
@session_start();

// Definir a variável da raiz do site
define("URL_BASE", "http://localhost/sistematcs/");

define("KEY", "jsalfja@#%@#RFfsaklfjsaklj21#$!#RAFSAf12412rwqfsaflks");

// Definir as variáveis de configuração do Banco Mysql
define("DB_HOST", "localhost");
define("DB_USER", 'root');
define("DB_PASSWORD", '');
define("DB_NAME", 'sistema_tcs');

include_once __DIR__ . "/mysql.php";
