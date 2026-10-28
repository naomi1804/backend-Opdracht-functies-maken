<?php

// functies toevoegen

function getNumber($prompt) {
    echo $prompt;
    return (float)readline();
}

function getOperation() {
    echo "Enter operation (+, -, *, /): ";
    return readline();
}

function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num2 != 0 ? $num1 / $num2 : "Error: Division by zero";
        default:
            return "Error: Invalid operation";
    }
}

$num1 = getNumber("Enter first number: ");

$operation = getOperation();

$num2 = getNumber("Enter second number: ");

$result = calculate($num1, $num2, $operation);

echo "Result: $result\n";

?>