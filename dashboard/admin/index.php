<?php
    require_once 'authentication/admin-class.php';

    $admin = new ADMIN();
    if(!$admin->isUserLoggedIn()) {
        $admin->redirect('../../');
    }

    $stmt = $admin->runQuery("SELECT * FROM user WHERE id = :id");
    $stmt->execute(array(":id" => $_SESSION['adminSession']));
    $user_data = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Jordan Collection</title>
    <style>
:root {
    --primary-color: #111;
    --secondary-color: #fff;
    --accent-color: #f4f4f4;
    --text-color: #333;
    --font-family: 'Arial, sans-serif';
    --container-width: 90%;
    background-image: url('../admin/bg.jpg');
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html {
    height: 100%;
}

body {
    font-family: var(--font-family);
    color: var(--text-color);
    background: var(--accent-color);
    line-height: 1.6;
    background-image: url('../admin/bg.jpg');
    background-size: cover;
    background-position: top center;
    min-height: 100%;
    display: flex;
    flex-direction: column;
}

.container {
    width: var(--container-width);
    margin: 0 auto;
    padding: 20px;
    position: relative;
}

header {
    background: var(--primary-color);
    color: var(--secondary-color);
    padding: 20px 0;
    position: relative;
}

header h1 {
    text-align: center;
    margin-bottom: 10px;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
}

nav ul li {
    margin: 0 10px;
}

nav ul li a {
    color: var(--secondary-color);
    text-decoration: none;
    font-weight: bold;
}

.logout-button {
    position: absolute;
    top: 20px;
    right: 20px;
    background-color: transparent;
    border: 2px solid var(--secondary-color);
    color: var(--secondary-color);
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    text-transform: uppercase;
    font-weight: bold;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.logout-button:hover {
    background-color: var(--secondary-color);
    color: var(--primary-color);
}

footer {
    margin-top: auto;
    background: var(--primary-color);
    color: var(--secondary-color);
    text-align: center;
    padding: 10px 0;
}
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Air Jordan Collection</h1>
            <button class="logout-button" onclick="logout()">Log Out</button>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="collection.php">Collection</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <footer>
        <div class="container">
            <p>&copy; 2024 Air Jordan Collection. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function logout() {
            window.location.href = "main.php";
        }
    </script>
</body>
</html>
