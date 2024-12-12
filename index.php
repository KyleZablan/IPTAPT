<?php
    include_once 'config/settings-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In/Sign up</title>
    <style>
        
        :root {
    --primary-color: #111;
    --secondary-color: #fff;
    --accent-color: #f4f4f4;
    --text-color: #333;
    --font-family: 'Arial, sans-serif';
    --container-width: 90%;
    background-image: url('src/images/bgm.jpg');
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    height: 100%;
    margin: 0;
}

body {
    font-family: var(--font-family);
    color: var(--text-color);
    background-image: url('./dashboard/admin/bgm.jpg');
    background-size: 100% 100% ;
    background-position: center center;
    background-attachment: fixed;
    min-height: 100%;
    display: flex;
    justify-content: flex-start; /* Align content to the left */
    align-items: center;
    overflow: hidden;
}

.container-register {
    display: flex;
    justify-content: flex-start; /* Align the boxes to the left */
    align-items: center;
    width: 100%;
    padding: 20px;
    gap: 20px; /* Adds space between the boxes */
}

.box, .box1 {
    background-color: rgba(51, 51, 51, 0.7); /* Slightly transparent dark gray */
    padding: 40px;
    border-radius: 9px;
    width: 350px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    text-align: center;
}

h1 {
    color: hwb(0 51% 46% / 0.6);
    margin-bottom: 20px;
}

.form-box input, .form-box1 input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background-color: var(--accent-color);
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

button {
    width: 100%;
    background-color: transparent;
    border: 2px solid var(--secondary-color);
    color: var(--secondary-color);
    padding: 12px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

button:hover {
    background-color: var(--secondary-color);
    color: var(--primary-color);
}

button a {
    color: var(--secondary-color);
    text-decoration: none;
}

button a:hover {
    color: var(--primary-color);
}

.btn-signin {
    display: inline-block;
    background-color: transparent;
    border: 2px solid #007bff;
    color: #007bff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s, color 0.3s;
}

.btn-signin:hover {
    background-color: #007bff;
    color: white;
}






    </style>

</head>
<body class="body1">


    <div class="container">
        <div class="box form-box">
            <h1>SIGN IN</h1>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <div class="field input">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
            </div>
            <div class="field input">
            <input type="email" name="email" placeholder="Enter Email" required> <br>
            </div>
            <div class="field input">
            <input type="password" name="password" placeholder="Enter Password" required> <br> <br>
            </div>
            <div class="field" id="btn">
            <button type="submit" name="btn-signin">Sign In</button>
            </div>
        </form>
        </div>
    </div>




    
    <div class="container-register">
        <div class="box1 form-box1">
    <h1>REGISTRATION</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <div class="field input">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
        </div>
        <div class="field input">
        <input type="text" name="username" placeholder="Enter Username" required> <br>
        </div>
        <div class="field input">
        <input type="email" name="email" placeholder="Enter Email" required> <br>
        </div>
        <div class="field input">
        <input type="password" name="password" placeholder="Enter Password" required> <br><br>
        </div>
        <div class="field" id="btn">
        <button type="submit" name="btn-signup">Sign Up</button>
        </div>
    </form>
    </div>
    </div>
</body> 
</html>