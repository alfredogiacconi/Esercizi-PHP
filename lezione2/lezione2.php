<?php
    // array ad indici
    $arDisney = [
        'pippo', 'pluto', 'paperino', 'paperone', 'topolino'
    ];
    
    $arDisney[1]= 'qui, quo, qua'; //sostituisce il valore 'pluto'

    print_r($arDisney); // stampa tutto l'array

    print $arDisney[0]; // stampa il valore di un indice

    print PHP_EOL;

    // array associativo: la chiave può essere testuale
    print "**** Marvel ****" . PHP_EOL;
    
    $arMarvel = [
        'ironman' => ['nome' => 'Tony Stark', 'arma' => 'armatura'],
        'capitan america' => ['nome' => 'Steve Rogers', 'arma' => 'scudo'],
        'vedova nera' => ['nome' => 'Natasha Romanov', 'arma' => 'arti marziali'],
        'green arrow' => ['nome' => 'Clint Burton', 'arma' => 'arco']
    ];

    print $arMarvel['ironman']['nome'];
    print PHP_EOL;
    print $arMarvel['ironman']['arma'];
    print PHP_EOL;

    /*
    $argc = n° argomenti
    $argv = valori argomenti
    
    terminale:
    > php .\lezione2.php 'personaggio'
                $argc =
                [0] => 'esercizio1.php'
                [1] => 'ironman'

    *****
    script
    *****
    
    if ($argc <= 1) {
        print "non sono indicati argomenti sufficenti";
        } else {
            $personaggio = $argv[1];
            print "L'arma di {$arMarvel[argv[1]['nome']}, detto {$personaggio}, è {$arMarvel[argv[1]['arma']}"; 
        }

    *definizione array
    $arMarvel[argv[1]]['nome']
    $arMarvel[argv[1]]['arma']
    */

    if ($argc <= 1) {
        print "non sono indicati argomenti sufficenti";
        } else {
            $personaggio = $argv[1];
            $nome = $arMarvel[$personaggio]['nome'];
            $arma = $arMarvel[$personaggio]['arma'];
            print "L'arma di ($nome), detto {$personaggio}, è ($arma)";
        }