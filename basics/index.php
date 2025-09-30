<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Basics Navigation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 40px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .nav-list {
            list-style: none;
            padding: 0;
        }
        .nav-list li {
            margin: 15px 0;
        }
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
        .nav-btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP Basics Navigation</h2>
        <ul class="nav-list">
            <li>
                <button class="nav-btn" onclick="window.open('variables.php', '_blank')">
                    Variables (variables.php)
                </button>
            </li>


            <li>
                <button class="nav-btn" onclick="window.open('arrays.php', '_blank')">
                    Learn Array (arrays.php)
                </button>
            </li>
            
            <li>
                <button class="nav-btn" onclick="window.open('loops.php', '_blank')">
                    Loops (loops.php)
                </button>
            </li>


            <li>
                <button class="nav-btn" onclick="window.open('functions.php', '_blank')">
                    Functions (functions.php)
                </button>
            </li>
            

            <li>
                <button class="nav-btn" onclick="window.open('conditions.php', '_blank')">
                    Conditions (conditions.php)
                </button>
            </li>
            
        </ul>
    </div>
</body>
</html>