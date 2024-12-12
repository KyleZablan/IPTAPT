<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Jordan Collection</title>
    <style>
        
:root {
    --primary-color: #111;
    --secondary-color: #fff;
    --accent-color: #f4f4f4;
    --text-color: #333;
    --font-family: 'Arial, sans-serif';
    --container-width: 90%;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html{
    height:100% ;
}

body {
    font-family: var(--font-family);
    color: var(--text-color);
    background: var(--accent-color);
    line-height: 1.6;
    min-height: 100%;
    display: flex;
    flex-direction: column;
}

header {
    background: var(--primary-color);
    color: var(--secondary-color);
    padding: 20px 0;
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

.contact-content {
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    background-color: rgba(0, 0, 0, 0.6);
    padding: 20px;
    border-radius: 10px;
}

.contact-content h2 {
    margin-top: 0;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    margin: 10px 0 5px;
}

input, textarea {
    width: 80%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    background-color: #007BFF;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
.container {
    width: var(--container-width);
    margin: 0 auto;
    padding: 20px;
}


.facebook-logo{
    width: 40px;
    height: 40px;
    
}

.instagram-logo{
    width: 40px;
    height: 40px;

}

footer {
    margin-top: auto;
    background: var(--primary-color);
    color: var(--secondary-color);
    text-align: center;
    padding: 20px 0;
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
    <main>
        <section class="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <p>If you have any questions or inquiries, feel free to reach out to us!</p>
                <form action="submit_contact_form.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
                <section>
                    <a href="https://www.facebook.com/profile.php?id=100087471828259" class="facebook-link" target="_blank">
                    <img src="../admin/fblogo1.jpg" alt="facebook" class="facebook-logo">
                    </a>
                    <a href="https://www.instagram.com/zablan_kyle/?hl=en" class="instagram-logo" target="_blank">
                        <img src="../admin/iglogo.jpg" alt="instagram" class="facebook-logo">
                    </a>
                </section>
            </div>
        </section>
    </main>
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
