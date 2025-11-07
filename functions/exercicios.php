<?php
    include "funcoes.php";

    $result1 = somar(15,7);
    echo "Função 1 <br>";
    echo "Resultado da 1º função é: $result1 <br><br>";

    echo "Função 2 <br>";
    $aluno = notas(6,6);
    echo "O Aluno está $aluno <br><br>";

    echo "Função 3 <br>";
    $kms = km(100);
    echo "O valor em Quilometros é $kms <br><br>";

    echo "Função 4 <br>";
    $area = area(2.5,3);
    echo "A Área é $area<br><br>";

    echo "Função 5 <br>";
    $tinta = tinta(45);
    echo "Os litros necessários são $tinta<br><br>";

    echo "Função 6 <br>";
    $novo = novoSalario(3000,15);
    echo "O novo salário é $novo<br><br>";    

    

?>
