
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    
    // Handle form submission logic here (e.g., send email or save to database)
    echo "Thank you, $name. Your message has been received.";
}
?>
