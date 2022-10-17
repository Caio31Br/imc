<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

<?php
    $aluno = $_POST["name"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    function &media(){
        global $nota1, $nota2;
        $media = ($nota1 + $nota2)/2;
        return $media;
    }
    $media =& media();

    if($media < 4){
        $situacao = "REPROVADO";
    }elseif ($media < 6){
        $situacao = "EXAME FINAL";
    } else {
        $situacao = "APROVADO   ";
    }

    echo "<h2>Nome: $aluno</h2>";
    echo "<h2>Nota 1ºBim: $nota1</h2>";
    echo "<h2>Nota 2ºBim: $nota2</h2>";
    echo "<h2>Média: $media</h2>";
    echo "<h2>Situação: $situacao</h2>";

   
?>

<a href="index.html">Retornar</a>

</body>
</html>