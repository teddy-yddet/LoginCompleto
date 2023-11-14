<?php
    $string = "Esta é uma string con caracteres especiais: \"'&\0";

    // limpa a string usando htmlspecialchars()

    $stringLimpa = htmlspecialchars($string);

    
    // imprime a string limpa
    echo $string;
    echo "";
    echo $stringLimpa;
    $stringdecodificada = htmlspecialchars_decode($stringLimpa);
?>