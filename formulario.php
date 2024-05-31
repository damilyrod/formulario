<?php

if (isset($_POST['btn_mostrar'])) {
    $nome_completo = $_POST['nome_completo_usuario'];
    $rua = $_POST ['rua_usuario'];
    $bairro = $_POST ['bairro_usuario'];
    $cep = $_POST ['cep_usuario'];



    echo 'Nome completo: ' . $nome_completo . '<br> Rua: '. $rua . '<br> Bairro: ' . $bairro .'<br> Cep: ' . $cep;

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="formulario.php" method="post">
        <label>Nome Completo:</label>
        <input name="nome_completo_usuario">
        <label>Rua:</label>
        <input name="rua_usuario">
        <label>Bairro:</label>
        <input name="bairro_usuario">
        <label>CEP:</label>
        <input name="cep_usuario">

        <button name="btn_mostrar">Mostrar</button>
    </form>
</body>

</html>