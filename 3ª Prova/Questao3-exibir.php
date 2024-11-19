<?php
    function adicao($a, $b){
        echo $a + $b;
    }
    function subtracao($a, $b){
        echo $a - $b;
    }
    function multiplicacao($a, $b){
        echo $a * $b;
    }
    function divisao($a, $b){
        echo $a / $b;
    }
    if(!(empty($_GET['numero1'])) && !(empty($_GET['numero2'])) && !(empty($_GET['operacoes']))){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $operacao = $_GET['operacoes'];
        if($numero2 == 0 && $operacao == "divisao"){
            echo "Você tentou dividir por zero! Isso não existe!";
        }
        else{
            switch($operacao){
                case "adicao":
                    adicao($numero1, $numero2);
                    break;
                case "subtracao":
                    subtracao($numero1, $numero2);
                    break;
                case "multiplicacao":
                    multiplicacao($numero1, $numero2);
                    break;
                case "divisao":
                    divisao($numero1, $numero2);
                    break;
                }
        }
    }
    if(($_GET['numero1'] == 0 || $_GET['numero2'] == 0) && !(empty($_GET['operacoes']))){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $operacao = $_GET['operacoes'];
        if($numero2 == 0 && $operacao == "divisao"){
            echo "Você tentou dividir por zero! Isso não existe!";
        }
        else{
            switch($operacao){
                case "adicao":
                    adicao($numero1, $numero2);
                    break;
                case "subtracao":
                    subtracao($numero1, $numero2);
                    break;
                case "multiplicacao":
                    multiplicacao($numero1, $numero2);
                    break;
                case "divisao":
                    divisao($numero1, $numero2);
                    break;
                }
        }
    }
    if(!(isset($_GET['numero1'])) || $_GET['numero1'] == ""){
        echo "Deu ruim! O 1º número não foi preeenchido corretamente<br/>";
    }
    if(!(isset($_GET['numero2'])) || $_GET['numero2'] == ""){
        echo "Deu ruim! O 2º número não foi preeenchido corretamente<br/>";
    }
    if(!(isset($_GET['operacoes'])) || $_GET['operacoes'] == ""){
        echo "Deu ruim! O campo operação não foi preeenchido corretamente<br/>";
    }
?>