<?php
    $name = $_POST['Kname'];
    $peso = $_POST['g1'];
    $altura = $_POST['g2'];
    $IMC = $peso/$altura;
    echo  "Nome do indivíduo:",  $name ,"<br>";
    echo  "Seu Imc",  $IMC ,"<br>";


    if ( $IMC < 18.5 ) {
        echo "Abaixo do peso";
    }

if ( $IMC == 1.85 &&  $IMC <= 24.9 ) {
    echo "Peso Normal";
}
if ( $IMC == 25 &&  $IMC <= 29.9 ) {
    echo "Sobrepeso";
}
if ( $IMC == 30 &&  $IMC <= 34.9 ) {
    echo "  Obesidade Grau 1";
}
if ( $IMC == 35 &&  $IMC <= 39.9 ) {
    echo "Obesidade Grau 2";
}
if ( $IMC >= 40 ) {
    echo "Obesidade grau 3 ou Mórbida";
}


?>