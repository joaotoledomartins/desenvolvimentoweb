<html>
<head>
    <title>Questão 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Questão 3</h1>
    <form action="Questao3-exibir.php" method="get" id="questao3">
        <label for="numero1">1º número:</label>
        <input type="number" id="numero1" name="numero1" placeholder="Digite o 1º número">
        <br>
        <label for="numero2">2º número:</label>
        <input type="number" id="numero2" name="numero2" placeholder="Digite o 2º número">
        <br>
        <label for="operacoes">Operações:</label>
        <br>
        <label for="adicao">Adição</label>
        <input type="radio" value="adicao" id="adicao" name="operacoes">
        <br>
        <label for="subtracao">Subtração</label>
        <input type="radio" value="subtracao"id="subtracao" name="operacoes">
        <br>
        <label for="multiplicacao">Multiplicação</label>
        <input type="radio" value="multiplicacao"id="multiplicacao" name="operacoes">
        <br>
        <label for="divisao">Divisão</label>
        <input type="radio" value="divisao"id="divisao" name="operacoes">
        <br>
        <button type="submit" id="Enviar" name="Enviar">Enviar</button>
    </form>
</body>
</html>