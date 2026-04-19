<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akshitha Reddy | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="Akshitha Reddy Portfolio">
</head>
<body>
    <header>
        <h1>Akshitha Reddy</h1>
        <nav>
            <a href="#about">About</a> | <a href="#contact">Contact</a>
        </nav>
    </header>

    <div class="hero">
        <h2>Aspiring Full-Stack Developer</h2>
        <p>Specializing in MERN Stack & AI Integrations</p>
    </div>
    <section id="skills">
    <h2>Technical Skills</h2>
    <ul><li>MERN Stack</li><li>PHP & MySQL</li><li>Python</li></ul>
</section>
    <section id="contact">
        <h3>Get in Touch</h3>
        <form action="index.php" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">Send</button>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $msg = mysqli_real_escape_string($conn, $_POST['message']);

            $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$msg')";
            if(mysqli_query($conn, $sql)){
                echo "<p style='color:green;'>Thanks! Your message is saved in the DB.</p>";
            }
        }
        ?>
    </section>

    <script src="script.js"></script>
</body>
</html>