<?php
// Include the database connection file
include('connection.php');

// Function to check password strength
function checkPasswordStrength($password)
{
    // Check if password length is at least 8 characters
    if (strlen($password) < 8) {
        return "Weak"; // Password is considered weak if it's less than 8 characters
    } else {
        return "Strong"; // Password is considered strong otherwise
    }
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
    // Check if all signup fields are set
    if (isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['rpsw'])) {
        // Retrieve email, password, and re-entered password from the form
        $email = $_POST['email'];
        $password = $_POST['psw'];
        $rpassword = $_POST['rpsw'];

        // Validate email format
        if (preg_match('/^[a-zA-Z0-9._%+-]+@gmail\.com$/', $email)) {
            // Check if password and re-entered password match
            if ($password == $rpassword) {
                // Check password strength
                $passwordStrength = checkPasswordStrength($password);

                // Hash the password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Prepare and execute the SQL statement to check if the email exists in the database
                $stmt = $conn->prepare('SELECT * FROM logininfo WHERE email = ?');
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $result = $stmt->get_result();

                // Check if user already exists
                if ($result->num_rows > 0) {
                    // User account already exists, display a message and redirect to signup page
                    echo '<script>alert("User account already registered"); window.location.href = "index.php";</script>';
                    exit();
                } else {
                    // Email is not registered, proceed with sign-up
                    // Prepare and execute the SQL statement to insert user into the database
                    $stmt = $conn->prepare('INSERT INTO logininfo (email, password) VALUES (?, ?)');
                    $stmt->bind_param('ss', $email, $hashed_password);

                    if ($stmt->execute()) {
                        // Signup successful, display a message and redirect to signup page
                        echo '<script>alert("Signup successful"); window.location.href = "index.php";</script>';
                        exit();
                    } else {
                        // Signup failed, display a message and redirect to signup page
                        echo '<script>alert("Signup failed"); window.location.href = "index.php";</script>';
                        exit();
                    }
                }
            } else {
                // Passwords do not match, display a message and redirect to signup page
                echo '<script>alert("Passwords do not match"); window.location.href = "index.php";</script>';
                exit();
            }
        } else {
            // Invalid email format, display a message and redirect to signup page
            echo '<script>alert("Invalid email format. Please enter a Gmail address"); window.location.href = "index.php";</script>';
            exit();
        }
    } else {
        // All signup fields not provided, display a message and redirect to signup page
        echo '<script>alert("All signup fields are required"); window.location.href = "index.php";</script>';
        exit();
    }
}
