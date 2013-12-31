<?php

/*Essa e a classe responsavel pelas principais funcoes no bando de dados de 
 * GuaraGas, oou seja aqui se encontra os metodos para conectar ao Banco,
 * inserir, alterar e deletar elementos do Banco de Dados
 */

class banco {
    
    public function __construct() {
        $this->conectarBanco();
    }

    public function conectarBanco() {
        
        $servidor = "localhost";
        $porta = 5432;
        $bancoDeDados = "hsegura_tutorial";
        $usuario = "hsegura_gerente";
        $senha = "123456";

        $conexao = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados " +
                                     "user=$usuario password=$senha");
     if(!$conexao) {
         die("Não foi possível se conectar ao banco de dados.");
     }
        
        /*$servidor = "localhost";
        $porta = 5432;
        $bancoDeDados = "guaragas";
        $usuario = "postgres";
        $senha = "123";

        $conexao = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados " +"user=$usuario password=$senha");
        
        if($conexao==null) {
            die("Nao foi possível se conectar ao banco de dados.");
        }
        
        $servidor = "localhost";
        $usuario = "postgres";
        $senha ="123";
        $conexao = pg_connect($servidor, $usuario, $senha);
        if($conexao==NULL){
            echo "nao";
        }
        //$conexao = pg_connect($servidor, $usuario, $senha) or die ("erro doidderia");
        echo "Conexão efetuada com sucesso!!";
        */
    }
    
    /*public function inserirPessoa($email, $nome, $cpf, $fone, $senha, $lote) {

        $sql_insert = "insert into pessoa (email,nome,cpf,fone,senha,lote) values ('" . $email . "','" . $nome . "','" . $cpf . "','" . $fone . "','" . $senha . "','" . $lote . "')";
        return mysql_query($sql_insert);
    }

    public function inserirVisitante($nome, $criador, $data) {

        $sql_insert = "insert into visitante (nome,criador,data) values ('" . $nome . "','" . $criador . "','" . $data . "')";
        return mysql_query($sql_insert);
    }

    public function inserirFuncionario($email, $nome, $fone, $funcao, $salario, $cpf, $datai, $endereco, $conta, $agencia, $senha) {

        $sql_insert = "insert into funcionario (email,nome,fone,funcao,salario,cpf,datai,endereco,conta,agencia,senha) values ('" . $email . "','" . $nome . "','" . $fone . "','" . $funcao . "','" . $salario . "','" . $cpf . "','" . $datai . "','" . $endereco . "','" . $conta . "','" . $agencia . "','" . $senha . "')";
        return mysql_query($sql_insert);
    }

    public function inserirCompromisso($nome, $descricao, $data, $hora, $criador, $convidados) {

        $sql_insert = "insert into compromisso (nome,descricao,data,hora,criador,convidados) values ('" . $nome . "','" . $descricao . "','" . $data . "','" . $hora . "','" . $criador . "','" . $convidados . "')";
        return mysql_query($sql_insert);
    }

    public function inserirPauta($nome, $descricao, $data, $opcao, $votou, $convidados, $encerrado, $resultado) {

        $sql_insert = "insert into pauta (nome,descricao,data,opcao,votou,convidados,encerrado,resultado) values ('" . $nome . "','" . $descricao . "','" . $data . "','" . $opcao . "','" . $votou . "','" . $convidados . "','" . $encerrado . "','" . $resultado . "')";
        return mysql_query($sql_insert);
    }

    public function inserirFluxo($nome, $descricao, $datal, $datav, $valor, $tipo, $efetuado, $relacao, $email) {

        $sql_insert = "insert into fluxo (nome,descricao,datal,datav,valor,tipo,efetuado,relacao,email) values ('" . $nome . "','" . $descricao . "','" . $datal . "','" . $datav . "','" . $valor . "','" . $tipo . "','" . $efetuado . "','" . $relacao . "','" . $email . "')";
        return mysql_query($sql_insert);
    }

    public function inserirChat($Id,$sender, $message) {
        $sql_insert = "insert into chat (sender,message,Idtopico) values ('" . $sender . "','" . $message . " ',' " .$Id ."')";
        return mysql_query($sql_insert);
    }

    public function inserirTopico($nome) {
        $sql_insert = "insert into topico (nome) values ('" . $nome ."')";
        return mysql_query($sql_insert);
    }

    public function pesquisarOrd($pesquisa, $tabela, $ordenar) {

        $sql_select = "select " . $pesquisa . " from " . $tabela . " order by " . $ordenar;
        $resultado = mysql_query($sql_select);

        if (!$resultado) {
            echo "Problema no comando SQL, erro " . mysql_error();
            return null;
        } else {
            return $resultado;
        }
    }
   
     public function pesquisarWhere($Id,$pesquisa, $tabela) {

        $sql_select = "select " . $pesquisa . " from " . $tabela . " where Idtopico ='" . $Id . "'" . " order by Id DESC";
        $resultado = mysql_query($sql_select);

        if (!$resultado) {
            echo "Problema no comando SQL, erro " . mysql_error();
            return null;
        } else {
            return $resultado;
        }
    }

    public function pesquisar($pesquisa, $tabela) {

        $sql_select = "select " . $pesquisa . " from " . $tabela;
        $resultado = mysql_query($sql_select);

        if (!$resultado) {
            echo "Problema no comando SQL, erro " . mysql_error();
            return null;
        } else {
            return $resultado;
        }
    }

    public function update($tabela, $chaveprim, $valorchavprim, $campo, $novovalor) {
        $sql_update = "UPDATE " . $tabela . " SET " . $campo . "='" . $novovalor . "' WHERE " . $chaveprim . "='" . $valorchavprim . "'";
        $resultado = mysql_query($sql_update);
        if (!$resultado) {
            echo "Problema no comando SQL, erro " . mysql_error();
            return null;
        } else {
            return $resultado;
        }
    }

    public function updatePobris($nome, $descricao, $data, $hora, $criador, $convidados) {
        $sql_delete = "DELETE FROM compromisso WHERE nome='" . $nome . "'";
        mysql_query($sql_delete);
        $this->inserirCompromisso($nome, $descricao, $data, $hora, $criador, $convidados);
    }

    public function updatePobris2($nome, $criador, $data, $Id) {
        $sql_delete = "DELETE FROM visitante WHERE Id='" . $Id . "'";
        mysql_query($sql_delete);
        $this->inserirVisitante($nome, $criador, $data);
    }

    public function updatePobris3($email, $nome, $fone, $funcao, $salario, $cpf, $datai, $endereco, $conta, $agencia, $senha) {
        $sql_delete = "DELETE FROM funcionario WHERE email='" . $email . "'";
        mysql_query($sql_delete);
        $this->inserirFuncionario($email, $nome, $fone, $funcao, $salario, $cpf, $datai, $endereco, $conta, $agencia, $senha);
    }

    public function delete($tabela, $campochave, $valorchave) {
        $sql_delete = "DELETE FROM " . $tabela . " WHERE " . $campochave . "='" . $valorchave . "'";
        mysql_query($sql_delete);
    }

    public function pesquisaPorChave($tabela, $campochave, $valorchave) {
        $sql_select = "SELECT * FROM " . $tabela;
        $resultado = mysql_query($sql_select);

        while ($linha = mysql_fetch_array($resultado)) {
            if ($linha[$campochave] === $valorchave) {
                return $linha;
            }
        }
        echo "Problema no comando SQL, erro " . mysql_error();
        return null;
    }

    //RETORNA NOME DO COND. OU FUNC. A PARTIR DO EMAIL; SE NÂO ACHAR RETORNA STRING VAZIO
    public function nomePorEmail($email) {
        $sql_selectp = "select * from pessoa";
        $resultadop = mysql_query($sql_selectp);

        while ($pessoa = mysql_fetch_array($resultadop)) {
            if ($pessoa['email'] === $email) {
                return $pessoa['nome'];
            }
        }

        $sql_selectf = "select * from funcionario";
        $resultadof = mysql_query($sql_selectf);

        while ($func = mysql_fetch_array($resultadof)) {
            if ($func['email'] === $email) {
                return $func['nome'];
            }
        }
        return "";
    }*/

}

?>

