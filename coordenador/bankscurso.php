<?php
#banco de dados para tabela curso
#dados para conectar com o banco

$servidor = 'localhost';
$usuario = 'root';
$senhaa = '1010';
$banco = 'bd_sad';

#Executa a conexão com o mysql
$lig = mysql_connect($servidor, $usuario, $senhaa) or die('Não possível fazer a conexão: ' . mysql_error());

#Seleciona o banco de dados que deseja utilizar
$select = @mysql_select_db($banco);

if ($_REQUEST["acao"] == "adicionar") {
    $sql = "INSERT INTO curso (nome, orientador, tipo, semestre, ch) 
            VALUES(";
    $sql .= "'" . $_REQUEST['nome']. "',";
    $sql .= "'" . $_REQUEST['orientador']. "',";
    $sql .= "'" . $_REQUEST['tipo']. "',";
    $sql .= "'" . $_REQUEST['semestre']. "',";
    $sql .= "'" . $_REQUEST["ch"]."'";
    $sql .= ")";

    $result = mysql_query($sql);

    if (!$result) {
        die('Erro: ' . mysql_error());
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=cadastroAluno.php");
    }
}
?>