<?php

$palos = array('Corazon_negro','Corazon_rojo','Diamante','Trebol');
$numeros = array('2','3','4','5','6','7','8','9','10');
$figuras = array('J','Q','K','AS');


$palo = array_rand($palos, 1);
$numero = array_rand($numeros, 1);
$figura = array_rand($numeros, 1);


print 'La carta aleatoria: ' . $numeros[$numero] . $figuras[$figura]. ' de ' . $palos[$palo];

?>
