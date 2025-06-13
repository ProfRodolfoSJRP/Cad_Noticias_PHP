<?php
// Padronizar Servidor para Brasil
setlocale(LC_ALL,'pt_BR','pt_BR.utf-8','portuguese');
// Define Fuso horário
date_default_timezone_set('America/Sao_Paulo');

// Constante do Banco de Dados
define('DB_HOST','localhost');
define('DB_NAME','cadastronoticias');
define('DB_USER','root');
define('DB_PASS','');

try{
  $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Ocorreu um erro no servidor - ".$e->getMessage();
}
