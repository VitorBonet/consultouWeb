<?php
ini_set('display_errors', true);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
date_default_timezone_set("America/Sao_Paulo");

include_once '../Model/DAO.Class.php';
include_once '../Model/User.Class.php';

session_start();
 
//abre as conexoes
$ObjDAO = new DAO();
$ObjUser = new User();

$connection = $ObjDAO->OpenConnection();

try{

    $user = $_REQUEST['user'];
    //$password = md5($_REQUEST['password']);
    $password = $_REQUEST['password'];

    $fields = USER_ID;
    $params = " WHERE " . USER_EMAIL . " = :USER_EMAIL AND " . USER_PASSWORD . " = :USER_PASSWORD";
    $bindParams = array(':USER_EMAIL' => $user, ':USER_PASSWORD' => $password);
    $consult = $ObjDAO->Consult($connection, USER_TABLENAME, $fields, $params, $bindParams);

    if(!$consult){
        $mensage = 'invalid';
        echo json_encode(array('response' => $mensage));
        $ObjDAO->CloseConnection($connection);
        exit;
    }

    $_SESSION['user'] = $user;

    $mensage = 'success';
    echo json_encode(array('response' => $mensage));

} catch (Exception $e) {
    $mensagem = 'error';
    echo json_encode(array('response' => $mensage));

} finally {
    $ObjDAO->CloseConnection($connection);
}

