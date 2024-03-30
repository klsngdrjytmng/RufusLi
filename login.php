<?php
// Include the database connection file
include( 'connection.php' );

// Check if form is submitted
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' && isset( $_POST[ 'submit' ] ) ) {
    // Check if both email and password are set
    if ( isset( $_POST[ 'email' ] ) && isset( $_POST[ 'password' ] ) ) {
        // Retrieve email and password from the form
        $email = $_POST[ 'email' ];
        $password = $_POST[ 'password' ];

        // Prepare and execute the SQL statement to fetch user from the database
        $stmt = $conn->prepare( 'SELECT * FROM info WHERE email = ?' );
        $stmt->bind_param( 's', $email );
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ( $result->num_rows == 1 ) {
            $user = $result->fetch_assoc();
            // Verify the password
            if ( password_verify( $password, $user[ 'Password' ] ) ) {
                // Password is correct, redirect to success page or perform other actions
                header( 'Location: success.php' );
                exit();
            } else {
                // Password is incorrect
                echo 'Invalid password';
                // Debugging: Output hashed password from the database
                echo 'Stored hashed password: ' . $user[ 'Password' ];
                // Debugging: Output hashed password provided during login
                echo 'Hashed password provided during login: ' . password_hash( $password, PASSWORD_DEFAULT );
            }
        } else {
            // User does not exist
            echo 'User not found';
        }
    } else {
        // Email or password not provided
        echo 'Email or password not provided';
    }
}
?>
