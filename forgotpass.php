<?php
// Include connection file and any other necessary files
include('connection.php');

// Define variables and initialize with empty values
$email = $email_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate email
    if (empty(trim($_POST["forgot_email"]))) {
        $email_err = "Please enter your email address.";
    } else {
        $email = trim($_POST["forgot_email"]);
    }

    // Check input errors before sending email
    if (empty($email_err)) {
        // Generate a unique token
        $token = bin2hex(random_bytes(32)); // Generate a random 32-character token

        // Store the token in the database with the user's email
        $stmt = $conn->prepare('UPDATE users SET reset_token = ? WHERE email = ?');
        $stmt->bind_param('ss', $token, $email);
        if ($stmt->execute()) {
            // Send the password reset email
            $to = $email;
            $subject = 'Password Reset';
            $message = 'Click the following link to reset your password: http://example.com/reset_password.php?token=' . $token;
            $headers = 'From: your@example.com' . "\r\n" .
                'Reply-To: your@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            // Send the email (you may need to configure your server to send emails)
            if (mail($to, $subject, $message, $headers)) {
                // Display a success message to the user
                echo 'Password reset instructions have been sent to your email.';
            } else {
                // Display an error message if email could not be sent
                echo 'Error: Unable to send password reset instructions. Please try again later.';
            }
        } else {
            // Display an error message if unable to update database
            echo 'Error: Unable to process your request. Please try again later.';
        }

        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forgot Password</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
        text-align: center;
    }

    h1 {
        color: #333;
        margin-bottom: 20px;
    }

    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    .error {
        color: #ff0000;
        margin-bottom: 10px;
    }
</style>
</head>
<body>

<div class="container">
    <h1>Forgot Password</h1>
    <form action="forgot_password.php" method="post">
        <div class="error"><?php echo $email_err; ?></div>
        <input type="email" name="forgot_email" placeholder="Enter your email" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>