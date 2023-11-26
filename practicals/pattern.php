<?php
function printPattern($layers) {
    if (!is_numeric($layers) || !is_int($layers) || $layers < 1) {
        return "Input is not a valid positive integer.";
    }

    for ($i = $layers; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}

if (count($argv) < 2) {
    echo "Please provide a positive integer as a command-line argument.\n";
    exit(1);
}

$input = (int)$argv[1];
printPattern($input);
?>