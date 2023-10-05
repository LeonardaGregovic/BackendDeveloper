<?php

$dan = date("N"); // ili switch (date("N"))

switch($dan) {

    case 1:
        echo "Ponedjeljak\n";
        break;
    case 2:
        echo "Utorak\n";
        break;
    case 3:
        echo "Srijeda\n";
        break;
    case 4:
        echo "Četvrtak\n";
        break;
    case 5:
        echo "Petak\n";
        break;
    case 6:
        echo "Subota\n";
        break;
    case 7:
        echo "Nedjelja\n";
    default:
        echo "Nepoznato\n";
}

?>