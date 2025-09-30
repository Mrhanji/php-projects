<?php
// Program Info:
// This PHP script demonstrates various conditional operations using if, else if, and else statements.
// It includes examples of simple conditions, conditions inside loops, conditions inside functions,
// and conditions for calling functions. Each example is commented for clarity.

// Example 1: Simple if-else statement
// Real-life scenario: Checking if a person is old enough to vote.
$age = 18;
if ($age >= 18) {
    echo "You are eligible to vote.<br>";
} else {
    echo "You are not eligible to vote.<br>";
}

// Example 2: if-elseif-else statement
// Real-life scenario: Grading system based on marks.
$marks = 75;
if ($marks >= 90) {
    echo "Grade: A<br>";
} elseif ($marks >= 75) {
    echo "Grade: B<br>";
} elseif ($marks >= 50) {
    echo "Grade: C<br>";
} else {
    echo "Grade: F<br>";
}

// Example 3: Condition inside a loop
// Real-life scenario: Printing even numbers from 1 to 10.
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i is even<br>";
    }
}

// Example 4: Condition inside a function
// Real-life scenario: Checking if a product is in stock.
function checkStock($quantity) {
    if ($quantity > 0) {
        return "Product is in stock.";
    } else {
        return "Product is out of stock.";
    }
}
echo checkStock(5) . "<br>";
echo checkStock(0) . "<br>";

// Example 5: Condition for calling functions
// Real-life scenario: Sending notifications based on user status.
function sendEmail() {
    echo "Email sent.<br>";
}
function sendSMS() {
    echo "SMS sent.<br>";
}

$userStatus = "active";
if ($userStatus == "active") {
    sendEmail();
} else {
    sendSMS();
}
?>