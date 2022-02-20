<?php

function concatena($str){
    global $lista;
    $lista .= $str . PHP_EOL;
}

$lista = null;
concatena("primo messaggio");
concatena('secondo messaggio');
concatena('terzo messaggio');
concatena('quarto messaggio');
concatena('quinto messaggio');
concatena('fine');
print $lista;

$arDipendenti = [
    ['name' => 'Marco', 'fatturato' => 550000, 'presenze' => 175, 'lamentele' => 2],
    ['name' => 'Silvia', 'fatturato' => 250000, 'presenze' => 140, 'lamentele' => 7],
    ['name' => 'Stefano', 'fatturato' => 300000, 'presenze' => 165, 'lamentele' => 3],
    ['name' => 'Gianni', 'fatturato' => 440000, 'presenze' => 165, 'lamentele' => 6],
    ['name' => 'Elisa', 'fatturato' => 200000, 'presenze' => 175, 'lamentele' => 3],
];

verificaDipendente($arDipendenti[0]);
verificaDipendente($arDipendenti[1]);
verificaDipendente($arDipendenti[2]);
verificaDipendente($arDipendenti[3]);
verificaDipendente($arDipendenti[4]);

function verificaDipendente($elemento){
    // && aumento
    if ($elemento['fatturato'] > 500000 && $elemento['presenze'] > 170){  //è fine anno e l'azienda intende assegnare un aumento e/o un premio
        print "{$elemento['name']} ha diritto all'aumento" . PHP_EOL;     //verrà dato a chi avrà fatturato + di 500.000 e avrà un numero di presenze > 170
    }
    // || premio
    if ($elemento['fatturato'] > 300000 && $elemento['presenze'] > 150){
        print "{$elemento['name']} ha diritto al premio" . PHP_EOL;   //il premio verrà dato a chi avrà fatturato + di 300.000 oppure a chi avrà un numero di presenze > 150
    }
    // && rinnovo contratto
    $assenze = 195 - $elemento['presenze']; //giorni totali possibili = 195
    if ($assenze > 50 && $elemento['lamentele'] > 5){
        print "{$elemento['name']} ha diritto al rinnovo" . PHP_EOL;
        //il contratto verrà rinnovato a chi avrà un numero di assenze > 50 oppure un numero di lamentele > 5 ma non entrambi
    }
}