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
    <h3>Exercício 3</h3>
    <?php include('../div.php');?>
    <?php
    $dadosProdutos = array(
        array('nome' => 'Café', 'fabricante' => 'Três corações', 'preco' => 9.84),
        array('nome' => 'Leite', 'fabricante' => 'Itambé', 'preco' => 5,30),
        array('nome' => 'Nescau', 'fabricante' => 'Nestle', 'preco' => 4.50)
    );

    echo '<h3>Minha versão</h3>';
    echo '<table><tr><th>Nome</th><th>Fabricante</th><th>Preço</th></tr>';
    foreach($dadosProdutos as $c){
        echo '<tr><td>' . $c['nome'] . '</td><td>' . $c['fabricante'] . '</td><td>' . $c['preco'] . '</td></tr>';
    }
    echo '</table>';
    /*pularLinha();
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
    echo $montarTabela($dadosFuncionarios);*/
?>
</body>
</html>