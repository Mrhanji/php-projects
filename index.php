<?php

// index.php

$projectName = "PHP Projects Collection";
$description = "Welcome to the PHP Projects Collection! This project is a hands-on resource for learning PHP, from basics to advanced topics. Explore folders like Basics, Forms, Sessions, Database, and OOP to practice and enhance your PHP skills.";
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
        .nav-list { list-style: none; padding: 0; margin-top: 30px; }
        .nav-list li { margin: 15px 0; }
        .nav-btn {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.2s;
        }
        .nav-btn:hover { background: #0056b3; }
        .info { margin-top: 20px; color: #444; }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($projectName); ?></h1>
        <p><?php echo nl2br(htmlspecialchars($description)); ?></p>
        <hr>
        <h2>Navigate by Folder</h2>
        <ul class="nav-list">
            <li>
                <button class="nav-btn" onclick="window.location.href='basics/index.php'">
                    Basics (variables, arrays, loops, functions, conditions)
                </button>
            </li>
            <li>
                <button class="nav-btn" onclick="window.location.href='forms/form-handling.php'">
                    Forms (handling & validation)
                </button>
            </li>
            <li>
                <button class="nav-btn" onclick="window.location.href='sessions/session-demo.php'">
                    Sessions (session demo)
                </button>
            </li>
            <li>
                <button class="nav-btn" onclick="window.location.href='database/db-connect.php'">
                    Database (connect & CRUD)
                </button>
            </li>
            <li>
                <button class="nav-btn" onclick="window.location.href='oop/classes.php'">
                    OOP (classes & inheritance)
                </button>
            </li>
        </ul>
        <div class="info">
            <strong>Tip:</strong> Click a button to explore the topic folder and try the examples.<br>
            You can also browse the code directly in each folder.
        </div>
    </div>
</body>
</html>