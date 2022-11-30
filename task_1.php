<?php
$lista_1= array('Ala','Ola','Kot');
$lista_2= array('Ala','Ada','Kot');
function unique_names($lista1, $lista2){
    $wynik = array_unique(array_merge($lista1,$lista2));
    return $wynik;
}
$names=unique_names($lista_1, $lista_2);
echo join(', ', $names)
?>