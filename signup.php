<?php
// Include the database connection file
include( 'connection.php' );

// Check if form is submitted
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' && isset( $_POST[ 'signup' ] ) ) {
    // Check if all signup fields are set
    if ( isset( $_POST[ 'email' ] ) && isset( $_POST[ 'password' ] ) && isset( $_POST[ 'rpassword' ] ) ) {
        // Retrieve email, password, and re-entered password from the form
        $email = $_POST[ 'email' ];
        $password = $_POST[ 'password' ];
        $rpassword = $_POST[ 'rpassword' ];

        // Prepare and execute the SQL statement to check if the email exists in the database
        $stmt = $conn->prepare( 'SELECT * FROM info WHERE Email = ?' );
        $stmt->bind_param( 's', $email );
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user already exists
        if ( $result->num_rows > 0 ) {
            // User account already exists, display a message
            echo 'User account already registered';
        } else {
            // Email is not registered, proceed with sign-up
            // Check if password and re-entered password match
            if ( $password === $rpassword ) {
                // Hash the password
                $hashed_password = password_hash( $password, PASSWORD_DEFAULT );

                // Prepare and execute the SQL statement to insert user into the database
                $stmt = $conn->prepare( 'INSERT INTO info (Email, password) VALUES (?, ?)' );
                $stmt->bind_param( 'ss', $email, $hashed_password );

                if ( $stmt->execute() ) {
                    // Signup successful, redirect to login page or perform other actions
                    header( 'Location:index.php' );
                    exit();
                } else {
                    // Signup failed
                    echo 'Signup failed';
                }
            } else {
                // Passwords do not match
                echo 'Passwords do not match';
            }
        }
    } else {
        // All signup fields not provided
        echo 'All signup fields are required';
    }
}
?>
