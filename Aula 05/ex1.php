<?php
    include('../funcoes.php');
?>
<html>
<head>
    <title>Aula 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Aula do dia 10/12</h1>
    <h3>Hash</h3>
    <?php
    $texto = 'João Pèdro Toledo Martins';
    echo "CRC32: ", crc32($texto); //2240392348
    pularLinha();
    echo "MD5: ", md5($texto); //75311d387b114fd517d871d3a26db6d6
    pularLinha();
    echo "SHA1: ", sha1($texto); //49ea2f2f9a3805533218249cda4cc085a0b8cf45
    pularLinha();
    ?>
</body>
</html>