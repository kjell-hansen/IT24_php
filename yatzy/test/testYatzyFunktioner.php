<?php
require_once "../src/yatzyFunktioner.php";

// Kör testfunktionerna
testIsYatzy();
testIsLitenStege();
testIsFyrtal();
testIsTretal();
testIsTvaPar();
testIsEttPar();
testIsKak();
testIsStorStege();

// Testfunktioner
function testIsYatzy():void {
    echo "Test: isYatzy:<br>";

    // Test 1: Alla ettor
    $tarningar=[1,1,1,1,1];
    $forvantan=true;

    echo "Alla ettor - ";
    $svar=isYatzy($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte förväntade '$forvantan', fick '$svar'";
    }
    echo "<br>";

    // Test 2: Alla ettor och en tvåa
    $tarningar=[1,1,1,2,1];
    $forvantan=false;

    echo "Alla ettor och en tvåa - ";
    $svar=isYatzy($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte förväntade '$forvantan', fick '$svar'";
    }
    echo "<br>";
}

function testIsLitenStege():void {
    echo "Test: Liten Stege<br>";

    // Test 1: Liten stege (1,2,3,4,5)
    $tarningar=[1,2,3,4,5];
    $forvantan=true;

    echo "Tärningar 1,2,3,4,5 - ";
    $svar=isLitenStege($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";

    // Test 2: Tärningar (1,2,3,4,6)
    $tarningar=[1,2,3,4,6];
    $forvantan=false;

    echo "Tärningar 1,2,3,4,6 - ";
    $svar=isLitenStege($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";
}

function testIsFyrtal():void {
    echo "Test fyrtal:<br>";

    // Test 1: Fyrtal i tvåor och en trea
    $tarningar=[2,2,2,3,2];
    $forvantan=true;

    echo "Tärningar " . implode(",",$tarningar) . " - ";
    $svar=isFyrtal($tarningar);
    if($svar===$forvantan) {
        echo " fungerar";
    } else {
        echo " fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";

    // Test 2: Kåk i tvåor och treor
    $tarningar=[2,3,2,3,2];
    $forvantan=false;

    echo "Tärningar " . implode(",",$tarningar) . " - ";
    $svar=isFyrtal($tarningar);
    if($svar===$forvantan) {
        echo " fungerar";
    } else {
        echo " fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";
}

function testIsTretal():void {
    echo"Test tretal<br>";

    // Test 1: tretal i tvåor
    $tarningar=[2,3,4,2,2];
    $forvantan=true;
    echo "Tärningar: " . implode(',', $tarningar) . " - ";
    $svar=isTretal($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";

    // Test 2: två par i tvåor och treor och en etta
    $tarningar=[2,3,1,3,2];
    $forvantan=false;
    echo "Tärningar: " . implode(',', $tarningar) . " - ";
    $svar=isTretal($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";

    // Test 3: Kåk i tvåor och treor
    $tarningar=[2,3,2,3,2];
    $forvantan=false;
    echo "Tärningar: " . implode(',', $tarningar) . " - ";
    $svar=isTretal($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";

}

function testIsTvaPar():void {
    echo "Test två par:<br>";

    // Test 1: Korrekt två par
    $tarningar=[2,3,4,2,3];
    $forvantan=true;
    echo "Tärningar: " . implode(',', $tarningar) . " - ";
    $svar=isTvaPar($tarningar);
    if($svar===$forvantan) {
        echo " fungerar ";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";

    // Test 2: Kåk
    $tarningar=[2,3,3,2,3];
    $forvantan=false;
    echo "Tärningar: " . implode(',', $tarningar) . " - ";
    $svar=isTvaPar($tarningar);
    if($svar===$forvantan) {
        echo " fungerar ";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";

    // Test 3: Tretal
    $tarningar=[2,3,3,1,3];
    $forvantan=false;
    echo "Tärningar: " . implode(',', $tarningar) . " - ";
    $svar=isTvaPar($tarningar);
    if($svar===$forvantan) {
        echo " fungerar ";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";
}

function testIsEttPar():void {
    echo "Test ett par:<br>";

    // Test 1: ett par
    $tarningar=[1,2,3,4,1];
    $forvantan=true;
    echo "Tärningar: " .implode(',', $tarningar) . " - ";
    $svar=isEttPar($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";

    // Test 2: alla olika
    $tarningar=[1,2,3,4,6];
    $forvantan=false;
    echo "Tärningar: " .implode(',', $tarningar) . " - ";
    $svar=isEttPar($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";
}

function testIsKak():void {
    echo "Test Kåk:<br>";

    // Test 1: Kåk i treor och tvåor
    $tarningar=[2,3,2,3,2];
    $forvantan=true;
    echo "Tärningar: " . implode(',',$tarningar) . " - ";
    $svar=isKak($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";

    // Test 2: Två par i treor och tvåor
    $tarningar=[2,3,2,3,1];
    $forvantan=false;
    echo "Tärningar: " . implode(',',$tarningar) . " - ";
    $svar=isKak($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";

    // Test 3: Fyrtal i treor och en tvåa
    $tarningar=[2,3,3,3,3];
    $forvantan=false;
    echo "Tärningar: " . implode(',',$tarningar) . " - ";
    $svar=isKak($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";
}
function testIsStorStege():void {
    echo "Test: Stor Stege<br>";

    // Test 1: Stor stege (2,3,4,5,6)
    $tarningar=[6,2,3,4,5];
    $forvantan=true;

    echo "Tärningar " . implode(',',$tarningar)  ." - ";
    $svar=isStorStege($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";

    // Test 2: Tärningar (1,2,3,4,6)
    $tarningar=[1,2,3,4,6];
    $forvantan=false;

    echo "Tärningar 1,2,3,4,6 - ";
    $svar=isStorStege($tarningar);
    if($svar===$forvantan) {
        echo "fungerar";
    } else {
        echo "fungerar inte, förväntade '$forvantan' fick '$svar'";
    }
    echo "<br>";
}
