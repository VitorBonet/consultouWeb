<?php

class DAO {

    //abrimos a connection através de uma função
    public function OpenConnection() {
        //definimos os parametros da connection - Servidor Local
        // $xml =  simplexml_load_file("../../web.config"); //or die("Error: Cannot create object"); 
        // if(!$xml){
        //     $xml =  simplexml_load_file("../../../web.config");
        // }
        // //in my case web.config is in previous directory
        // $array = json_decode(json_encode((array) $xml), 1);

        // $servidor = $xml->appSettings->xpath('add[@key="dbServer"]')[0]["value"];
        // $instancia = $xml->appSettings->xpath('add[@key="dbInstance"]')[0]["value"];
        // $database = $xml->appSettings->xpath('add[@key="dbDatabase"]')[0]["value"];
        // $usuario = $xml->appSettings->xpath('add[@key="dbUser"]')[0]["value"];
        // $senha = $xml->appSettings->xpath('add[@key="dbPwd"]')[0]["value"];

        // $connection = new PDO( "sqlsrv:Server={$servidor}\\{$instancia};Database={$database}", $usuario, $senha, array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );

        $host = "localhost";
        $user = "root";
        $pass = "";
        $banco = "CONSULTOU";
        $charsetdb = "utf8";
        //$connection = new mysqli($host, $user, $pass, $banco) or die("A conexão com o Banco de dados Falhou, tente novamente!" . mysqli_connect_error());
        //$connection->set_charset($charsetdb);
        $connection = new PDO('mysql:host='.$host.';dbname='.$banco, $user, $pass);
        return $connection;
    }

    //fecha connection
    public function CloseConnection($connection) {
        $connection = null;
    }

    //Executar query sem abrir conexão e nem fechar
    public function Run_query($connection, $query, $bindParams = null, $insertid = false) {
        $stmt = $connection->prepare($query);
        $stmt->bind_param(':USER_ID', '1');
        $stmt->execute();

        return $stmt;
    
    }
    //gravar registros no banco de dados
    public function Insert($connection, $table, array $data, $insertid = false) {
        $table = $table;

        $fields = implode(', ', array_keys($data));
        $bindParams = array();
        //$values = "'" . implode("', '", $data) . "'";
        foreach ($data as $value) {
            if ($contador == 0) {
                $separador = " ";
            } else {
                $separador = ", ";
            }
            $bindParams[':FIELD' . $contador] = $value;

            $values = $values . $separador . ":FIELD" . $contador . "";
            
            $contador++;
        }

        $query = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} )";
        
        return $this->Run_query($connection, $query, $bindParams);//$insertid);
    }

    // ler registros no banco de dados
    public function Consult($connection, $table, $fields, $params, $bindParams = null){
        $table = $table;
        $params = ($params) ? " {$params}" : "";
        $query = "SELECT {$fields} FROM {$table} {$params}";
        $result = $this->Run_query($connection, $query, $bindParams);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($result)){
            return $result;
        } else{
            return false;
        }
    }

    // alterar registros na tabela
    public function Alter($connection, $table, array $data, $where = null, $bindParams = null, $insertid = false) {
        $table = $table;
        $where = ($where) ? " WHERE {$where}" : null;
        $contador = 0;
        $bindParamsInter = array();

        foreach ($data as $key => $value) {
            $fields[] = "{$key} = :FIELD" . $contador ;
            $bindParamsInter[':FIELD' . $contador] = $value;
            $contador++;
        }
        $fields = implode(', ', $fields);
        $query = "UPDATE {$table} SET {$fields}{$where}";

        foreach ($bindParams as $key => $bindp) {
            $bindParamsInter[$key] = $bindp;
        }

        return $this->Run_query($connection, $query, $bindParamsInter,  $insertid);
    }

    //deletar registros da tabela
    public function Delete($connection, $table, $where = null, $bindParams = null) {
        $table = $table;
        $where = ($where) ? " WHERE {$where}" : null;

        $query = "DELETE FROM {$table}{$where}";

        return $this->Run_query($connection, $query, $bindParams);
    }

    // pega array de fields e monsta corretamente
    public function mountFields($fields){
        if(count($fields) == 1){
            $finalFields = $fields;
        }else{
            foreach($fields as $field){
                if ($contador == 0) {
                    $separador = " ";
                } else {
                    $separador = ", ";
                }
    
                $finalFields = $finalFields .  $separador . $field;
                
                $contador++;
            }
        }
        
        return $finalFields;
    }

    // monta o parametro e o bindParams para select com IN
    public function MountInParams($arr, $fieldSearch, $keyArray = null, $returnJustIn = null){

        foreach ($arr as $value) {
            if ($cont == 0) {
                $separator = " ";
            } else {
                $separator = ", ";
            }
            if($keyArray != null){
                $bindParams[':FIELD' . $cont] = $value[$keyArray];
            } else{
                $bindParams[':FIELD' . $cont] = $value;
            }

            $values = $values . $separator . ":FIELD" . $cont . "";
            
            $cont++;
        }

        if($returnJustIn == null){
            $params = "WHERE " . $fieldSearch . " IN (" . $values . ")";
        } else{
            $params = " " . $fieldSearch . " IN (" . $values . ")";
        }

        return [$params, $bindParams];

    }

}
    