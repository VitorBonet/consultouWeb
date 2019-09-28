<?php

class DAO {

    //abrimos a conexao através de uma função
    public function abreconexao() {
        //definimos os parametros da conexao - Servidor Local

        $host = "localhost";
        $user = "root";
        $pass = "";
        $banco = "CONSULTOU";
        $charsetdb = "utf8";
        $conexao = new mysqli($host, $user, $pass, $banco) or die("A conexão com o Banco de dados Falhou, tente novamente!" . mysqli_connect_error());
        $conexao->set_charset($charsetdb);
        return $conexao;
    }

    //fecha conexao
    public function fechaconexao($conexao) {
        $conexao->close();
    }

    //Escapar dados através do real escape
    public function escapar($dados) {
        $conexao = $this->abreconexao();
        if (!is_array($dados)) {
            $dados = $conexao->real_escape_string($dados);
        } else {
            $arr = $dados;
            foreach ($arr as $key => $value) {
                $key = $conexao->real_escape_string($key);
                $value = $conexao->real_escape_string($value);

                $dados[$key] = $value;
            }
        }
        $this->fechaconexao($conexao);
        return $dados;
    }

    //Executar query
    public function executar_query($query, $insertid = false) {
        $conexao = $this->abreconexao();
        //$result		= @mysqli_query($conexao, $query) or die(mysqli_error($conexao));
        // Prepara uma consulta SQL
        if ($result = $conexao->query($query)) {
            // Atribui valores às variáveis da consulta
            //$sql->bind_param('s', $data); // Coloca o valor de $data no lugar da primeira interrogação (?)
            // Executa a consulta
            //$result->execute();
            if ($insertid) {
                $result = $conexao->insert_id;
            }
            // Fecha a consulta
            //$result->close();
        }
        $this->fechaconexao($conexao);
        return $result;
    }

    //gravar registros no banco de dados
    public function Inserir($table, array $data, $insertid = false) {
        $table = $table;
        $data = $this->escapar($data);

        $fields = implode(', ', array_keys($data));
        //$values = "'" . implode("', '", $data) . "'";
        foreach ($data as $value) {
            if ($contador == 0) {
                $separador = " ";
            } else {
                $separador = ", ";
            }
            if (substr_count(strtoupper($value), "SELECT") > 0 ||
                    substr_count(strtoupper($value), "TO_DATE") > 0 ||
                    substr_count(strtoupper($value), "DATETIME") > 0 ||
                    substr_count(strtoupper($value), "GETDATE") > 0 ||
                    substr_count(strtoupper($value), "SYSDATE") > 0) {
                $values = $values . $separador . $value . "";
            } else {
                $values = $values . $separador . "'" . $value . "'";
            }
            $contador++;
        }

        $query = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} )";

        return $this->executar_query($query, $insertid);
    }

    //gravar registros no banco de dados mas exibir antes
    public function InserirTeste($table, array $data, $insertid = false) {
        $table = $table;
        $data = $this->escapar($data);

        $fields = implode(', ', array_keys($data));
        $values = "'" . implode("', '", $data) . "'";

        $query = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} )";
        echo $query;
        return $this->executar_query($query, $insertid);
    }

    // ler registros no banco de dados
    public function consultar($table, $fields = "*", $params = null) {
        $table = $table;
        $params = ($params) ? " {$params}" : null;
        $query = "SELECT SQL_CACHE {$fields} FROM {$table} {$params}";
        $result = $this->executar_query($query);
        $count = $result->num_rows;
        if (($result) && $count > 0) {
            while ($res = $result->fetch_array(MYSQLI_ASSOC)) {
                $data[] = $res;
            }
            //$data['countrow'] = $count;
            return $data;
        } else {
            return false;
        }
        $result->close();
    }
    // ler registros no banco de dados
    public function consultarTeste($table, $fields = "*", $params = null) {
        $table = $table;
        $params = ($params) ? " {$params}" : null;
        $query = "SELECT SQL_CACHE {$fields} FROM {$table} {$params}";
        echo $query;
        $result = $this->executar_query($query);
        $count = $result->num_rows;
        if (($result) && $count > 0) {
            while ($res = $result->fetch_array(MYSQLI_ASSOC)) {
                $data[] = $res;
            }
            //$data['countrow'] = $count;
            return $data;
        } else {
            return false;
        }
        $result->close();
    }
    // alterar registros na tabela
    public function atualizar($table, array $data, $where = null, $insertid = false) {
        $table = $table;
        $where = ($where) ? " WHERE {$where}" : null;

        foreach ($data as $key => $value) {
            $fields[] = "{$key} = '{$value}'";
        }
        $fields = implode(', ', $fields);
        $query = "UPDATE {$table} SET {$fields}{$where}";

        return $this->executar_query($query, $insertid);
    }

    //deletar registros da tabela
    public function deletar($table, $where = null) {
        $table = $table;
        $where = ($where) ? " WHERE {$where}" : null;

        $query = "DELETE FROM {$table}{$where}";

        return $this->executar_query($query);
    }

}
