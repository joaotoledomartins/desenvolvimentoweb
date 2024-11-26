<?php
    include('../funcoes.php');
?>
<html>
<head>
    <title>Aula 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Aula do dia 26/11</h1>
    <h3>Spread operator</h3>
    <?php
    $numero1 = 25;
    $numero2 = 20;
        function somar2(int ... $numeros){
            //return array_sum($numeros) //Solução Simples

            //Solução menos inteligente
            $total = 0.0;
            foreach($numeros as $n){
                $total += $n;
            }
            return $total;
        }
        pularlinha();
        echo var_dump(somar2($numero1, $numero2, 38, 47, 26));
        ?>
        <?php include('../div.php');?>
        <?php
        
        ?>
</body>
</html>