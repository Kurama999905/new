<?php
$lista_1= array('Ala','Ola','Kot');
$lista_2= array('Ala','Ada','Kot', 'ola','oLA');
function unique_names($lista1, $lista2){
    $check = array_merge($lista1, $lista2);
    $wynik = array();
    foreach ($check as $element_1){
        if(!in_array(strtolower($element_1), array_map('strtolower', $wynik))){
            $wynik[]=$element_1;
        }
        }
    return $wynik;
    }
$names=unique_names($lista_1, $lista_2);
echo join(', ', $names)
?>
