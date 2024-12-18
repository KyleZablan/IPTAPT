<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click Anywhere to Log In</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('../admin/bgm.jpg');
            background-size: 100% 100% ;
            background-position: center center;
            background-attachment: fixed;
            min-height: 100%;
            display: flex;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
        }

        h1 {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 200px;
    height: 50px;
    background-color: rgba(51, 51, 51, 0.7);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-size: 1rem;
    color: white;
    text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.8);
}

        
        body:hover {
            cursor: pointer;
        }
    </style>
</head>
<body onclick="redirectToLogin()">
    <h1>Click Anywhere to Log In</h1>

    <script>
        function redirectToLogin() {
           
            window.location.href = "/IPT-V1/index.php";
        }
    </script>
</body>
</html>
