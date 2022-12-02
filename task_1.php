<?php
$lista_1 = array('ela', 'Ala', 'Oliwia', 'Maria', 'ELa', 'Ela', 'Maria','oliwia', 'Sofia', 'Ela', 'Dorota', 'Maria');
$lista_2 = array('MaRia','olIwia', 'SofIA', 'Ela', 'DORota','Ala', 'Ela', 'Oliwia', 'Maria', 'Ela', 'Ela', 'Maria', 'DonKEY');
$lista_3 = array('jakub');
$lista_4 = array('marian');
$lista_5 = array('MiKoŁaJ');
function unique_names($listy){
    $listy = func_get_args();
    $wynik = array();
    foreach ($listy as $lista){
    foreach ($lista as $element_1){
        if(!in_array(strtolower($element_1), array_map('strtolower', $wynik))){
            $wynik[]=ucfirst(mb_strtolower($element_1));
        }
        }
    }
    sort($wynik);
    return $wynik;
    }
$names=unique_names($lista_1, $lista_2, $lista_3, $lista_4, $lista_5);
echo join(', ', $names);
?>
