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
    <h3>Exercício 1</h3>
    <?php include('../div.php');?>
    <?php
    $soma = function(int $a, int $b):int{
        return $a + $b;
    };
    //$soma = fn(int $a, int $b): int => $a + $b;
    //pularLinha();
    var_dump($soma(5,6));
    ?>
</body>
</html>