<?php
ini_set('display_errors', true);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
date_default_timezone_set("America/Sao_Paulo");

include_once '../Model/DAO.Class.php';
include_once '../Model/User.Class.php';

session_start();

// Define uma função que poderá ser usada para validar e-mails usando regexp
function isMail($email){
    $er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
    if (preg_match($er, $email)){
	return true;
    } else {
	return false;
    }
}
 
//abre as conexoes
$ObjDAO = new DAO();
$ObjUser = new User();

//pega os valores do cadastro
$name        = $_REQUEST[USER_NAME];
$email       = strtolower($_REQUEST[USER_EMAIL]);
$telephone   = $_REQUEST[USER_TELEPHONE];
$telCell     = $_REQUEST[USER_TELEPHONE_CELL];
$password    = $_REQUEST[USER_PASSWORD];
$confirmPass = $_REQUEST['ConfirPassword'];
$language    = $_SESSION['lang'];
$country     = $_REQUEST['idCountry'];
$status      = 'WAITING CONFIRMATION';
$type        = 'EXTERNAL';

// Faz a verificação usando a função
// usamos a função isMail passando a variável $email
if (!$name) {
    $naocadastrado = "name";
    echo json_encode(array('resposta' => $naocadastrado));
    exit;
}

if (!$email) {
    $naocadastrado = "email";
    echo json_encode(array('resposta' => $naocadastrado));
    exit;
}

if (isMail($email)){
    
} else {
    echo json_encode(array('resposta' => 'email invalido'));
    exit;
}

// não permite incluir user @weg.net pois loga pelo AD
$termo = '@weg.net';
$pattern = '/' . $termo . '/';//Padrão a ser encontrado na string $tags
if (preg_match($pattern, $email)) {
    $naocadastrado = "userWeg";
    echo json_encode(array('resposta' => $naocadastrado));
    exit;
} 

if (!$telephone && !$telCell) {
    $naocadastrado = "tell";
    echo json_encode(array('resposta' => $naocadastrado));
    exit;
}

if (!$password) {
    $naocadastrado = "password";
    echo json_encode(array('resposta' => $naocadastrado));
    exit;
}

if (!$confirmPass) {
    $naocadastrado = "confirmPassword";
    echo json_encode(array('resposta' => $naocadastrado));
    exit;
}

if ($confirmPass != $password) {
    $naocadastrado = "passwordnotequal";
    echo json_encode(array('resposta' => $naocadastrado));
    exit;
}

//verificar se ja existe esse user no banco
//estrutura a query para busca no banco
$query = "SELECT * FROM " . USER_TABLENAME . "  WHERE " . USER_EMAIL . " = '{$email}'";
//consulta no banco as querys
$consulta = $ObjDAO->executar_query($query);
//verifica se a consulta nao vem nula
$row = mysqli_num_rows($consulta);
if ($row > 0) {
    $mensagem = 'existe';
    echo json_encode(array('resposta' => $mensagem));
    exit;
} 

// montamos o array de dados da pessoa
$usuario = array();
$usuario[USER_NAME] = $name;
$usuario[USER_EMAIL] = $email;
$usuario[USER_TELEPHONE] = $telephone;
$usuario[USER_TELEPHONE_CELL] = $telCell;
$usuario[USER_PASSWORD] = md5($password);
$usuario[USER_DATE_ADD] =  Date('Y-m-d H:i:s');
$usuario[USER_LANGUAGE] = $language;
$usuario[USER_COUNTRY] = $country;
$usuario[USER_STATUS] = $status;
$usuario[USER_TYPE] = $type;
$usuario[USER_LAST_ACCESS] = Date('Y-m-d H:i:s');
$ObjDAO->Inserir(USER_TABLENAME, $usuario);

//verificar se o cadastro realmente foi feito
$table = USER_TABLENAME;
$fields = "*";
$params = "WHERE " . USER_EMAIL . " = '{$email}'";
$consulta = $ObjDAO->consultar($table, $fields, $params);

$userId = $consulta[0][USER_ID];

if ($userId != null) {
    $mensagem = 'success';
} else {
    $mensagem = 'error';
}

echo json_encode(array('resposta' => $mensagem));

//envia Email para malharia ser informada que cliente se cadastrou
//pega usuario da sessao
 if($mensagem == 'success'){
    
    //Envia email
    $userIdURL = base64_encode($userId);
    $ObjWorkFlow = new WorkFlow();
    $subject = 'Novo usuário incluído';
    $body = '<div>
    <div>
      
        <h3>Prezado,</h3>
  
        <h4>Seu usuário foi criado com sucesso. </h4>
        <h4 style="font-weight: 500;" >Cilque <a href="http://10.1.72.96/autoCadastro/View/confirmUser?id=' . $userIdURL . '">aqui</a> para confirmar seu cadastro.</h4>
  
      </div>
  
      <h4 style="margin: font-weight: 500;">Seção de Exportação</h4>
      <h4 style="margin: -18px 0px 10px 0px; font-weight: 500;">WEG Equipamentos Elétricos S/A</h4>
    </div>
    
  </div>';
    $address = array($email);
    $ObjWorkFlow->sendWF($subject, $body, $address);
}


