<?php

#Verificando se existe valores no banco
if (isset($_GET['search'])) {

    $nome = $_GET["search"];
    #Conecta com o banco
    $servidor = 'localhost';
    $usuario = 'root';
    $senhaa = '1010';
    $banco = 'bd_sad';

#Executa a conexão com o mysql
    $lig = mysql_connect($servidor, $usuario, $senhaa) or die('Não possível fazer a conexão: ' . mysql_error());

#Seleciona o banco de dados que deseja utilizar
    $select = @mysql_select_db($banco);

#Verifica se a variavel esta vazia
    if (empty($nome)) {
        $pesq = "SELECT * FROM curso";
    } else {
        $nome .="%";
        $pesq = "SELECT FROM curso WHERE nome like '$nome'";
    }
    sleep(1);
    $buscar = mysql_db_query($pesq);
    $cont = mysql_affected_rows($lig);

#Verifica se retornou linha
    if ($cont > 0) {
        #Construir codigo html tabela
        $tabela = "<table borde ='1'>
            <tread>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Orientador</th>
                    <th>Tipo</th>
                    <th>Ch</th>
                </tr>
             </thead>
             <tbody>
             <tr>";
        $return = "$tabela";
        #Capturando dados de Consulta e inserimos na tabela HTML
        while ($linha = mysql_fetch_array($result)) {
            $return.= "<td>" . utf8_encode($linha['id']) . "</td>";
            $return.= "<td>" . utf8_encode($linha['nome']) . "</td>";
            $return.= "<td>" . utf8_encode($linha['Orientador']) . "</td>";
            $return.= "<td>" . utf8_encode($linha['Tipo']) . "</td>";
            $return.= "<td>" . utf8_encode($linha['Ch']) . "</td>";
            $return.="<tr>";
        }
        echo $return.= '</tbody></table>';
    } else {
# Mensagem se não achou nada:
        echo 'Não foi encontrados valor nenhum!';
    }
}
?>