<?php
declare(strict_types=1);

/**
 * Utvärderar värdet av 5 tärningar och returnerar vilka alternativ
 * man kan välja i Yatzy! och deras värde
 * @param int[] $tarningar
 * @return string[]
 */
function utvarderaTarningar(array $tarningar):array {
    $retur=[];
    if(isYatzy($tarningar)) {
        $retur['Yatzy']=50;
    }

    return $retur;
}

/**
 * Funktion för att kontrollera om tärningarna är Yatzy (alla samma)
 * @param int[] $tarningar
 * @return bool
 */
function isYatzy(array $tarningar):bool {
    $antalOlikaVarden=array_count_values($tarningar);

    if($antalOlikaVarden===1) {
        return true;
    }
    return false;
}