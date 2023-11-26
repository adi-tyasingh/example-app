<?php
function generateFibonacci($n) {
    if (!is_numeric($n) || !is_int($n) || $n < 1) {
        return "Input is not a valid positive integer.";
    }

    $fibonacciSequence = array();
    $a = 0;
    $b = 1;

    for ($i = 1; $i <= $n; $i++) {
        $fibonacciSequence[] = $a;
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }

    return $fibonacciSequence;
}

if (count($argv) < 2) {
    echo "Please provide a positive integer as a command-line argument.\n";
    exit(1);
}

$input = (int)$argv[1];
$result = generateFibonacci($input);

if (is_array($result)) {
    echo "Fibonacci sequence for the first $input numbers: ";
    foreach ($result as $value) {
        echo $value . ", ";
    }
    echo "\n";
} else {
    echo $result . "\n";
}
?>