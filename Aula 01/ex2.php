<?php
    include('../funcoes.php');
?>
<html>
<head>
    <title>Aula 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Aula do dia 05/11</h1>
    <h3>Exercício 2</h3>
    <?php include('../div.php');?>
    <?php
    $dadosFuncionarios = array(
        array('nome' => 'João', 'idade' => 23, 'cidade' => 'Nova Friburgo'),
        array('nome' => 'José', 'idade' => 25, 'cidade' => 'Nova Friburgo'),
        array('nome' => 'Maria', 'idade' => 22, 'cidade' => 'Bom Jardim')
    );
    $i = 0;
    echo '<h3>Minha versão</h3>';
    echo '<table><tr><th>Nome</th><th>Idade</th><th>Cidade</th></tr>';
    while($i <= 2){
        echo '<tr><td>' . $dadosFuncionarios[$i]['nome'] . '</td><td>' . $dadosFuncionarios[$i]['idade'] . '</td><td>' . $dadosFuncionarios[$i]['cidade'] . '</td></tr>';
        $i++;
    }
    echo '</table>';
    pularLinha();
    pularLinha();
    pularLinha(); 
    $montarTabela = function ($dados) : string {
        $retorno = "<table><tr><th>Nome</th><th>Idade</th><th>Cidade</th></tr>";
        for($i = 0; $i < count($dados); $i++){
            $retorno .= "<tr><td>" . $dados[$i]['nome'] . "</td>" .
            "<td>" . $dados[$i]['idade'] . "</td>" .
            "<td>" . $dados[$i]['cidade'] . "</td></tr>";
        }
        $retorno .= "</table>";
        return $retorno;
    };
    echo '<h3>Versão do Vitor</h3>';
    echo $montarTabela($dadosFuncionarios);
?>
</body>
</html>