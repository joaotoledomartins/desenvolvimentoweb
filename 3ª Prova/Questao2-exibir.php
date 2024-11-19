<?php
    if(!(empty($_GET['nome'])) && !(empty($_GET['idade'])) && !(empty($_GET['estado'])) && !(empty($_GET['cidade'])) && !(empty($_GET['sexo']))){
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $estado = $_GET['estado'];
        $cidade = $_GET['cidade'];
        $sexo = $_GET['sexo'];
        echo "Seu nome é: " . $nome;
        echo "<br/>";
        echo "Sua idade é: " . $idade;
        echo "<br/>";
        echo "Seu estado é: " . $estado;
        echo "<br/>";
        echo "Sua cidade é: " . $cidade;
        echo "<br/>";
        echo "Seu sexo é: " . $sexo;
    }
    if(empty(($_GET['nome']))){
        echo "Deu ruim! O campo nome não foi preeenchido corretamente<br/>";
    }
    if(empty($_GET['idade'])){
        echo "Deu ruim! O campo idade não foi preeenchido corretamente<br/>";
    }
    if(empty($_GET['estado'])){
        echo "Deu ruim! O campo estado não foi preeenchido corretamente<br/>";
    }
    if(empty($_GET['cidade'])){
        echo "Deu ruim! O campo cidade não foi preeenchido corretamente<br/>";
    }
    if(empty($_GET['sexo'])){
        echo "Deu ruim! O campo sexo não foi preeenchido corretamente<br/>";
    }
?>