<?php
function calculateFactorial($n) {
    if (!is_numeric($n) || !is_int($n) || $n < 0) {
        return "Input is not a valid non-negative integer.";
    }

    if ($n == 0 || $n == 1) {
        return 1;
    }

    $factorial = 1;
    for ($i = 2; $i <= $n; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

if (count($argv) < 2) {
    echo "Please provide a non-negative integer as a command-line argument.\n";
    exit(1);
}

$input = (int)$argv[1];
$result = calculateFactorial($input);

if (!is_numeric($result)) {
    echo $result . "\n";
} else {
    echo "Factorial of $input is: $result\n";
}
