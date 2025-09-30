<?php
// Indexed array
$fruits = ["Apple", "Banana", "Cherry"];

// Associative array
$user = [
    "name" => "John Doe",
    "email" => "john@example.com",
    "age" => 30
];

// Multidimensional array
$products = [
    [
        "id" => 1,
        "name" => "Laptop",
        "price" => 1200
    ],
    [
        "id" => 2,
        "name" => "Smartphone",
        "price" => 800
    ]
];

// Output examples
echo "First fruit: " . $fruits[0] . "\n";
echo "User name: " . $user["name"] . "\n";
echo "First product name: " . $products[0]["name"] . "\n";
?>