<?php
    function CriarTabela($numeroColunas, $numeroLinhas){
        echo "<table border='1px solid black'><tr>";
        $c = 1;
        while($c <= $numeroColunas){
            echo "<th>Cabeçalho " . $c . "</th>";
            $c++;
        }
        echo "</tr>";
        for($i = 1;$i <= $numeroLinhas; $i++){
            echo "<tr>";
            for($j = 1;$j <= $numeroColunas;$j++){
                echo "<td>Linha" . $i . ", Coluna " . $j . "</td>";
            }
            echo "</tr>";
        }
        echo "<table>";
    }
    if((!(empty(($_GET['linha']))) && $_GET['linha'] >= 1) && (!(empty($_GET['coluna'])) && $_GET['coluna'] >= 1)){
        $numeroLinhas = $_GET['linha'];
        $numeroColunas = $_GET['coluna'];
        CriarTabela($numeroColunas,$numeroLinhas);
    }
    if(empty($_GET['linha']) || $_GET['linha'] < 1){
        echo "Deu ruim! O campo linhas não foi preeenchido corretamente<br/>";
    }
    if(empty($_GET['coluna']) ||  $_GET['coluna'] < 1){
        echo "Deu ruim! O campo colunas não foi preeenchido corretamente<br/>";
    }
?>