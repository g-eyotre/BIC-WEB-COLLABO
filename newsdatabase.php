<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Font Awesome CSS CDN -->
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "subscribers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    // Insert into Database
    $sql = "INSERT INTO subscribers (email) VALUES ('$email')";
    if ($conn->query($sql) === TRUE) {
        // Send Email Notification via SendGrid
        $to_email = $email;
        $subject = "Subscription Confirmation";
        $message = "Thank you for subscribing to our newsletter!";
        $headers = "From: your_email@example.com";
        
        // Uncomment the following line to send the email using SendGrid
        // mail($to_email, $subject, $message, $headers);
        
        // Print Success Message
        echo '<div class="success-message"><i class="fas fa-check"></i>Subscription successful. Check your email for confirmation.</div>';
    } else {
        echo '<div class="error-message">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }
}

$conn->close();
?>
</body>
</html>
