<?php
namespace practicals;

class Practical {
    // Static function to print "Hello, World!"
    public static function printHello() {
        echo "Hello, World!";
    }

    // Static function to add two numbers
    public static function add($num1, $num2) {
        self::validateNumeric($num1);
        self::validateNumeric($num2);

        return $num1 + $num2;
    }

    // Static function to generate a Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        self::validatePositiveInteger($n);

        $fibonacciSequence = [];
        if ($n == 1) {
            $fibonacciSequence[] = 0;
        } else {
            $fibonacciSequence = [0, 1];
            for ($i = 2; $i < $n; $i++) {
                $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
            }
        }
        return $fibonacciSequence;
    }

    // Helper function to validate if a value is numeric or a numeric string
    private static function validateNumeric($value) {
        if (!is_numeric($value) && !is_numeric(filter_var($value, FILTER_VALIDATE_FLOAT))) {
            throw new \InvalidArgumentException("Invalid argument. Only integers, floating point numbers, integer strings, and float strings are allowed.");
        }
    }

    // Helper function to validate if a value is a positive integer or an integer string
    private static function validatePositiveInteger($value) {
        if (!is_int($value) || $value <= 0) {
            throw new \InvalidArgumentException("Invalid argument. Only positive integers are allowed.");
        }
    }
}
?>
