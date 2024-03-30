<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'attendencesys';
$conn = mysqli_connect( $servername, $username, $password, $db_name, 3306 );
if ( $conn == false ) {
    die( 'Connection failed:'.mysqli_connect_error() );
}
echo '';
?>
