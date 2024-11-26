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
    <form action="get" ></form>
    <fieldset>
        <legend>Filtro</legend>
        <form action="tabela.php" method="get" id="filtro">
            <label for="nome">Nome:</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite o seu nome">
            <br>
            <label for="cidade">Cidade:</label>
            <br>
            <input type="text" id="cidade" name="cidade" placeholder="Digite a sua cidade">
            <br>
            <label for="idade">Idade:</label>
            <br>
            <input type="number" id="idade" name="idade" placeholder="Digite a sua idade">
            <br>
            <label for="estado">Estado:</label>
            <br>
            <select id="estado" name="estado">
            <option value="">Escolha o seu estado de nascência</option>
                <?php
                    $estados = array(
                        "AC" => "Acre",
                        "AL" => "Alagoas",
                        "AP" => "Amapá",
                        "AM" => "Amazonas",
                        "BA" => "Bahia",
                        "CE" => "Ceará",
                        "DF" => "Distrito Federal",
                        "ES" => "Espírito Santo",
                        "GO" => "Goiás",
                        "MA" => "Maranhão",
                        "MT" => "Mato Grosso",
                        "MS" => "Mato Grosso do Sul",
                        "MG" => "Minas Gerais",
                        "PA" => "Pará",
                        "PB" => "Paraíba",
                        "PR" => "Paraná",
                        "PE" => "Pernambuco",
                        "PI" => "Piauí",
                        "RJ" => "Rio de Janeiro",
                        "RN" => "Rio Grande do Norte",
                        "RS" => "Rio Grande do Sul",
                        "RO" => "Rondônia",
                        "RR" => "Roraima",
                        "SC" => "Santa Catarina",
                        "SP" => "São Paulo",
                        "SE" => "Sergipe",
                        "TO" => "Tocantins"
                    );
                    foreach($estados as $chave => $valor){
                        echo "<option value ='" . $chave ."'>" . $valor . "</option>";
                    }
                ?>
            </select>
            <br>
            <br>
            <button type="submit" id="Filtrar" name="Filtrar">Filtrar</button>

        </form>
    </fieldset>
    <?php

    ?>
</body>
</html>