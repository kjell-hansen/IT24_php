<?php
$sidor = 25;

switch ($sidor) {
    case 1:
    case 2:
        echo "Ogiltig form";
        break;
    case 3:
        echo "Triangel";
        break;
    default:
        echo "{$sidor}-hörning";
}
