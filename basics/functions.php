<?php
// Simple function without parameters
function sayHello() {
    echo "Hello, World!";
}

// Function with parameter
function functionWithParameter($name) {
    echo "Hello, $name!";
}

// Function with a return value
function functionWithReturnValue($a, $b) {
    return $a + $b;
}

// Function with default parameter value
function functionWithDefaultParameter($a, $b = 2) {
    return $a * $b;
}

// Calling the functions
sayHello(); // Output: Hello, World!
echo "<br>";

functionWithParameter("Alice"); // Output: Hello, Alice!
echo "<br>";

$result = functionWithReturnValue(5, 3);
echo "5 + 3 = $result"; // Output: 5 + 3 = 8
echo "<br>";

echo functionWithDefaultParameter(4); // Output: 8 (uses default $b = 2)
echo "<br>";

echo functionWithDefaultParameter(4, 5); // Output: 20
?>