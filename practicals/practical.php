<?php
class Practical {
    // Static function to print "Hello, World!"
    public static function printHello() {
        echo "Hello, World!";
    }

    // Static function to add two numbers
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Static function to generate a Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        $fibonacciSequence = [];
        if ($n <= 0) {
            return $fibonacciSequence; // Return an empty array for non-positive integers.
        } elseif ($n == 1) {
            $fibonacciSequence[] = 0; // Special case for n = 1
        } else {
            $fibonacciSequence = [0, 1]; // Initialize the sequence with the first two numbers
            for ($i = 2; $i < $n; $i++) {
                $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
            }
        }
        return $fibonacciSequence;
    }
}
?>
