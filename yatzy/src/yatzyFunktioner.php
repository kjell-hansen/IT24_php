<?php
declare(strict_types=1);

/**
 * Utvärderar värdet av 5 tärningar och returnerar vilka alternativ
 * man kan välja i Yatzy! och deras värde
 * @param int[] $tarningar
 * @return string[]
 */
function utvarderaTarningar(array $tarningar):array {
    $retur = [];
    if (isEttPar($tarningar)) {
        $retur["Ett par"] = vardeEttPar($tarningar);
    }
    if (isTvaPar($tarningar)) {
        $retur["Två par"] = vardeTvaPar($tarningar);
    }
    if (isTretal($tarningar)) {
        $retur["Tretal"] = vardeTretal($tarningar);
    }
    if (isFyrtal($tarningar)) {
        $retur["Fyrtal"] = vardeFyrtal($tarningar);
    }
    if (isLitenStege($tarningar)) {
        $retur["Liten stege"] = vardeAllaTarningar($tarningar);
    }
    if (isStorStege($tarningar)) {
        $retur["Stor stege"] = vardeAllaTarningar($tarningar);
    }
    if (isKak($tarningar)) {
        $retur["Kåk"] = vardeAllaTarningar($tarningar);
    }

    $retur["Chans"] = vardeAllaTarningar($tarningar);

    if (isYatzy($tarningar)) {
        $retur['Yatzy'] = 50;
    }

    return $retur;
}

/**
 * Funktion för att kontrollera om tärningarna är Yatzy (alla samma)
 * @param int[] $tarningar
 * @return bool
 */
function isYatzy(array $tarningar):bool {
    $antalOlikaVarden = array_count_values($tarningar);

    if (count($antalOlikaVarden) === 1) {
        return true;
    }

    return false;
}

/**
 * Kontrollerar om tärningarna uppfyller villkoret för att vara Liten stege
 * @param int[] $tarningar
 * @return bool
 */
function isLitenStege(array $tarningar):bool {
    $antalOlikaVarden = array_count_values($tarningar);

    // Alla tärningar är olika
    if (count($antalOlikaVarden) !== 5) {
        return false;
    }
    // Summan av tärningarna är 15
    $summa = array_sum($tarningar);
    if ($summa !== 15) {
        return false;
    }

    return true;
}

/**
 * Kontrollerar om tärningarna uppfyller villkoren för fyrtal
 * @param int[] $tarningar
 * @return bool
 */
function isFyrtal(array $tarningar):bool {
    $antalOlikaVarden = array_count_values($tarningar);

    if (count($antalOlikaVarden) !== 2) {
        return false;
    }

    // Loopa igenom och kontrollera om det finns 4 av någon sort
    foreach ($antalOlikaVarden as $antal) {
        if ($antal === 4) {
            return true;
        }
    }

    return false;
}

/**
 * Kontrollerar om tärningarna uppfyller villkoret för tretal
 * @param int[] $tarningar
 * @return bool
 */
function isTretal(array $tarningar):bool {
    $antalOlikaVarden = array_count_values($tarningar);

    if (count($antalOlikaVarden) !== 3) {
        return false;
    }

    // Loopa igenom och kontrollera om det finns 3 av någon sort
    foreach ($antalOlikaVarden as $antal) {
        if ($antal === 3) {
            return true;
        }
    }

    return false;
}

/**
 * Kontrollerar att tärningarna uppfyller villkoret för två par
 * @param int[] $tarningar
 * @return bool
 */
function isTvaPar(array $tarningar):bool {
    $antalOlikaVarden = array_count_values($tarningar);

    // Två par har tre olika tärningsvärden
    if (count($antalOlikaVarden) !== 3) {
        return false;
    }

    // Loopa igenom och kontrollera att det inte finns 3 av någon sort
    foreach ($antalOlikaVarden as $antal) {
        if ($antal === 3) {
            return false;
        }
    }

    return true;
}

/**
 * Kontrollerar att tärningarna uppfyller kraven för ett par
 * @param int[] $tarningar
 * @return bool
 */
function isEttPar(array $tarningar):bool {
    $antalOlikaVarden = array_count_values($tarningar);

    if (count($antalOlikaVarden) === 4) {
        return true;
    }

    return false;
}

/**
 * Kontrollerar om tärningarna uppfyller kraven för kåk
 * @param array $tarningar
 * @return bool
 */
function isKak(array $tarningar):bool {
    $antalOlikaVarden = array_count_values($tarningar);

    // Kåk innehåller två olika värden
    if (count($antalOlikaVarden) !== 2) {
        return false;
    }

    // Om något antal värden är 4 är det ingen kåk
    foreach ($antalOlikaVarden as $varde) {
        if ($varde === 4) {
            return false;
        }
    }

    return true;
}

/**
 * Kontrollerar om tärningarna uppfyller kraven för stor stege
 * @param int[] $tarningar
 * @return bool
 */
function isStorStege(array $tarningar):bool {
    $antalOlikaVarden = array_count_values($tarningar);

    // Alla tärningar är olika
    if (count($antalOlikaVarden) !== 5) {
        return false;
    }
    // Summan av tärningarna är 20
    $summa = array_sum($tarningar);
    if ($summa !== 20) {
        return false;
    }

    return true;
}

function vardeEttPar(array $tarningar):int {
    $tarningsVarden = array_count_values($tarningar);
    foreach ($tarningsVarden as $ogon => $antal) {
        if ($antal === 2) {
            return $antal * $ogon;
        }
    }

    return -1;
}

function vardeTretal(array $tarningar):int {
    $tarningsVarden = array_count_values($tarningar);
    foreach ($tarningsVarden as $ogon => $antal) {
        if ($antal === 3) {
            return $antal * $ogon;
        }
    }

    return -1;
}

function vardeFyrtal(array $tarningar):int {
    $tarningsVarden = array_count_values($tarningar);
    foreach ($tarningsVarden as $ogon => $antal) {
        if ($antal === 4) {
            return $antal * $ogon;
        }
    }

    return -1;
}

function vardeTvaPar(array $tarningar):int {
    $tarningsVarden = array_count_values($tarningar);
    $summa = 0;
    foreach ($tarningsVarden as $ogon => $antal) {
        if ($antal === 2) {
            $summa += $antal * $ogon;
        }
    }

    return $summa;
}

function vardeAllaTarningar(array $tarningar):int {
    return array_sum($tarningar);
}
