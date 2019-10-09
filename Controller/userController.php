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

//pega os valores do cadastro
$typeRegister = $_REQUEST['typeRegister'];

$connection = $ObjDAO->OpenConnection();

try{

    switch ($typeRegister) {
        case 'user':
            if(!$_REQUEST[USER_NAME] || !$_REQUEST[USER_EMAIL] || !$_REQUEST[USER_PASSWORD] || !$_REQUEST[USER_DATE_BIRTH]
            ||!$_REQUEST[USER_SEX]){
                $mensage = "error";
                echo json_encode(array('response' => $mensage));
                exit;
            }
            $arr = []
            $arr[] = $_REQUEST[USER_NAME];
            $arr[] = $_REQUEST[USER_EMAIL];
            $arr[] = $_REQUEST[USER_PASSWORD];
            $arr[] = $_REQUEST[USER_DATE_BIRTH];
            $arr[] = $_REQUEST[USER_SEX];
            $arr[] = $_REQUEST[USER_DATE_CREATED];
            $arr[] = $_REQUEST[USER_LAST_ACCESS];
            $arr[] = $_REQUEST[USER_ACCESS_NUMBER]; 
            break;
        case 'doctor':
            # code...
            break;
        case 'clinic':
            # code...
            break;
    }

    $connection->commit();

    $mensage = 'success';
    echo json_encode(array('response' => $mensage));

} catch (Exception $e) {
    $mensagem = 'error';
    echo json_encode(array('response' => $mensage));
        $connection->rollBack();

} finally {
    $ObjDAO->CloseConnection($connection);
}

