<?php
$ukuran_baju = "L";
switch ($ukuran_baju) {
    case "S":
        echo "Ukuran Kecil";
        break;
    case "M":
        echo "Ukuran Sedang";
        break;
    case "L":
        echo "Ukuran Besar";
        break;
    case "XL":
        echo "Ukuran Extra Besar";
        break;
    default:
        echo "Ukuran tidak dikenal";
}
?>