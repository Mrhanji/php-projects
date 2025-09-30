<?php
// index.php

// Project details
$projectName = "PHP Projects Collection";
$description = "Welcome to the PHP Projects Collection! This project serves as a showcase and learning resource for various PHP-based applications and scripts. Explore the code, experiment, and enhance your PHP skills.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($projectName); ?></title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 700px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);}
        h1 { color: #333; }
        p { color: #555; }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($projectName); ?></h1>
        <p><?php echo nl2br(htmlspecialchars($description)); ?></p>
        <hr>
        <h2>About This Project</h2>
        <ul>
            <li>Demonstrates PHP fundamentals and best practices.</li>
            <li>Includes sample applications and scripts.</li>
            <li>Easy to extend and customize for your own needs.</li>
        </ul>
        <p>Feel free to browse the code and contribute!</p>
    </div>
</body>
</html>