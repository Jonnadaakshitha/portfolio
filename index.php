<form action="index.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message"></textarea>
    <button type="submit" name="submit">Send Message</button>
</form>

<?php
if(isset($_POST['submit'])){
    $conn = mysqli_connect("localhost", "root", "", "portfolio_db");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $query = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$msg')";
    if(mysqli_query($conn, $query)){
        echo "<p>Message saved to Database!</p>";
    }
}
?>