<?php
ini_set('display_errors', true);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
date_default_timezone_set("America/Sao_Paulo");

include_once '../Model/DAO.Class.php';
//include_once '../Model/User.Class.php';

session_start();
 
//abre as conexoes
$ObjDAO = new DAO();
//$ObjUser = new User();

//pega os valores do cadastro
$typeRegister = $_REQUEST['typeRegister'];

switch ($typeRegister) {
    case 'user':
        # code...
        break;
    case 'doctor':
        # code...
        break;
    case 'clinic':
        # code...
        break;
}
 $user     = $_REQUEST['user'];
 $password = $_REQUEST['password'];

 // verifica se existe no banco de dados um usuário com essa senha
$param = " WHERE USE_EMAIL = '" . $user . "' AND USE_SENHA = '" . $password . "'";
var_dump($param);
try {
    //code...
} catch (Exce $th) {
    //throw $th;
}

if (false) {
    $naocadastrado = "false";
    echo json_encode(array('resposta' => $naocadastrado));
    exit;
}

if ($userId != null) {
    $mensagem = 'success';
} else {
    $mensagem = 'error';
}

echo json_encode(array('resposta' => $mensagem));



