<?php
    function calculaMediaFinal($n1, $n2,$n3){
        return ($n1 + $n2 + $n3)/3;
    }
    if($_GET['nota1'] == "" || $_GET['nota2'] == "" || $_GET['nota3'] == ""){
        if(!(isset($_GET['nota1'])) || $_GET['nota1'] == ""){
            echo "Deu ruim! A 1ª nota não foi preeenchida corretamente<br/>";
        }
        if(!(isset($_GET['nota2'])) || $_GET['nota2'] == ""){
            echo "Deu ruim! A 2ª nota não foi preeenchida corretamente<br/>";
        }
        if(!(isset($_GET['nota3'])) || $_GET['nota3'] == ""){
            echo "Deu ruim! A 3ª nota não foi preeenchida corretamente<br/>";
        }
        die();
    }
    if(!(empty(($_GET['nota1']))) && !(empty(($_GET['nota2']))) && !(empty(($_GET['nota3'])))){
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];
        $mediaFinal = calculaMediaFinal($nota1,$nota2,$nota3);
        echo "A média final desse aluno é: " . $mediaFinal . "<br/>";
        if($mediaFinal >= 6){
            echo "O aluno foi aprovado";
        }
        else{
            echo "O aluno foi reprovado";
        }
    }
    if($_GET['nota1'] == 0 || $_GET['nota2'] == 0 || $_GET['nota3'] == 0){
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];
        $mediaFinal = calculaMediaFinal($nota1,$nota2,$nota3);
        echo "A média final desse aluno é: " . $mediaFinal . "<br/>";
        if($mediaFinal >= 6){
            echo "O aluno foi aprovado";
        }
        else{
            echo "O aluno foi reprovado";
        }
    }
    if(!(isset($_GET['nota1'])) || $_GET['nota1'] == ""){
        echo "Deu ruim! A 1ª nota não foi preeenchida corretamente<br/>";
    }
    if(!(isset($_GET['nota2'])) || $_GET['nota2'] == ""){
        echo "Deu ruim! A 2ª nota não foi preeenchida corretamente<br/>";
    }
    if(!(isset($_GET['nota3'])) || $_GET['nota3'] == ""){
        echo "Deu ruim! A 3ª nota não foi preeenchida corretamente<br/>";
    }
    $i = 1;
    for(; $i < 9;){
        echo $i;
        $i++;
    } 
?>