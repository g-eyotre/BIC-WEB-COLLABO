<?php
// Database Connection
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

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
        echo "Subscription successful. Check your email for confirmation.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
