<?php

/*Cleynaldo Carvalho dos Santos 
 * TCC - SISTEMA SAD - SISTMA DE APOIO AO DOCENTE
 * 
 */

#dados para conectar com o banco

$servidor = 'localhost';
$usuario = 'root';
$senhaa = '1010';
$banco = 'bd_sad';

#Executa a conexão com o mysql
$lig = mysql_connect($servidor, $usuario, $senhaa) or die('Não possível fazer a conexão: '.mysql_error());

#Seleciona o banco de dados que deseja utilizar
$select = @mysql_select_db($banco);

    if(@$_REQUEST['acao'] == "12345")
    {
        $sql = "INSERT INTO notas (disciplina, curso, turma, aluno, nota, frequencia) 
            VALUES(";
        $sql .= "'".$_REQUEST['selectDisciplina']."',";
        $sql .= "'".$_REQUEST['selectCurso']."',";
        $sql .= "'".$_REQUEST['selectTurma']."',";
        $sql .= "'".$_REQUEST['selectAluno']."',";
        $sql .= "'".$_REQUEST['selectNota']."',";
        $sql .= "'".$_REQUEST['optionFreq']."'";
        $sql .= ")";
        
        $result = mysql_query($sql);
        
        if(!$result)
        {
            die('Erro: '.mysql_error());
        }
        else
        {
           
             echo'<h2>Cadastrado com sucesso!<hr></h2>';
             
             mysql_close();
             
             header("refresh: 3; url=cadastroTurma.php");
        }   
    }


?>
