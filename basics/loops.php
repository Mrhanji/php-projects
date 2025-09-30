<?php
// Example 1: Looping through a list of products in a shopping cart (foreach)
/*
Why we use this loop:
- The foreach loop is ideal for iterating over arrays when you need to access each element directly.
- It simplifies code and avoids manual index management.
Why we don't use another:
- For and while loops require manual indexing, which is unnecessary and less readable for simple array traversal.
*/
$shoppingCart = ['Apple', 'Banana', 'Laptop', 'Book'];
echo "Items in your shopping cart:\n";
foreach ($shoppingCart as $item) {
    echo "- $item\n";
}

// Example 2: Sending reminder emails to users (for)
/*
Why we use this loop:
- The for loop is suitable when you need to access array elements by their index, especially when you need the index value.
- It allows easy control over the start, end, and increment of the loop.
Why we don't use another:
- Foreach does not provide direct access to the index unless explicitly requested.
- While and do-while are less clear for fixed-length, index-based iteration.
*/
$userEmails = ['alice@example.com', 'bob@example.com', 'carol@example.com'];
for ($i = 0; $i < count($userEmails); $i++) {
    echo "Sending reminder email to: {$userEmails[$i]}\n";
}

// Example 3: Counting down days to an event (while)
/*
Why we use this loop:
- The while loop is useful when the number of iterations depends on a condition that changes within the loop.
- It is clear and concise for countdowns or when the end condition is not based on a fixed array length.
Why we don't use another:
- For loops are better for known iteration counts, but while is more readable for countdowns.
- Foreach is not suitable since we're not iterating over an array.
*/
$daysLeft = 5;
echo "Countdown to the event:\n";
while ($daysLeft > 0) {
    echo "$daysLeft days left\n";
    $daysLeft--;
}

// Example 4: Checking inventory until out of stock (do-while)
/*
Why we use this loop:
- The do-while loop guarantees that the loop body runs at least once, which is useful when you need to process something before checking the condition.
- It is ideal for scenarios where the action must occur before the condition is tested.
Why we don't use another:
- While loops check the condition before running, which may skip the loop if the condition is initially false.
- For and foreach are not suitable since we're not iterating over a collection or using an index.
*/
$inventory = 3;
do {
    echo "Processing sale, $inventory items left in stock\n";
    $inventory--;
} while ($inventory > 0);
echo "Out of stock!\n";
?>
