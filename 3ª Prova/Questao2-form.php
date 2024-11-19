<html>
<head>
    <title>Questão 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Questão 2</h1>
    <form action="Questao2-exibir.php" method="get" id="questao2">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
        <br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" placeholder="Digite sua idade">
        <br>
        <label for="estado">Estado:</label>
        <select id="estado" name="estado">
            <option value="">Escolha o seu estado de nascência</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
            <option value="SP">São Paulo</option>
        </select>
        <br>
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade">
        <br>
        <label for="sexo">Sexo:</label>
        <br>
        <label for="Feminino">Feminino</label>
        <input type="radio" value="Feminino" id="Feminino" name="sexo">
        <br>
        <label for="Masculino">Masculino</label>
        <input type="radio" value="Masculino "id="Masculino" name="sexo">
        <br>
        <button type="submit" id="Enviar" name="Enviar">Enviar</button>
    </form>
</body>
</html>