<?php
$buah = "apel";

switch ($buah) {
    case "mangga":
        echo "Ini mangga";
        break;
    case "apel":
        echo "Ini apel";
        // Break disini menghentikan switch
        break;
    case "pisang":
        echo "Ini pisang";
        // Break disini menghentikan switch
        break;
    default:
        echo "Buah tidak dikenal";
}
