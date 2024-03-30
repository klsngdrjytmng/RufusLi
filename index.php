<?php
include( 'connection.php' );
?>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<link rel = 'stylesheet' href = 'style.css'>
<title>Login</title>
</head>
<body>
<div class = 'header-content'>
<div class = 'logo-img'>
<a href = 'https://salesiancollege.ac.in/'>
<img src = 'https://salesiancollege.ac.in/wp-content/uploads/2023/06/Blue-Logo.svg' alt = 'Salesian College (Autonomous) Siliguri & Sonada' class = 'logo' />
</a>
</div>
<nav>
QR Code Attendance System Login
</nav>
</div>
<div class = 'container' id = 'blur'>
<div class = 'img-slider'></div>
<form class = 'login-block' action = 'login.php' method = 'POST' autocomplete = 'off'>
<div class = 'contents'>
<div class = 'upper'>
Login
<div class = 'input-box'>
<label for = 'email'></label>
<input type = 'text' name = 'email' id = 'email' placeholder = 'Email' required>
</div>
<div class = 'input-box'>
<label for = 'password'></label>
<input type = 'password' name = 'password' id = 'password' placeholder = 'Password' required>
</div>
<div class = 'remember-forgot'>
<label><input type = 'checkbox'>Remember me</label>
<a href = '#'>forgot password?</a>
</div>
</div>
<div class = 'buttons'>
<button type = 'submit' name = 'submit' class = 'btn'>Log-in</button>
<button type = 'submit' class = 'btn sign' onclick = 'toggle()'>Sign-In</button>
</div>
</div>
</form>
</div>
<div id = 'popup'>
<form action = 'signup.php' method = 'POST' class = 'form-container'>
<div class = 'container-1'>
<div class = 'upper'>
Sign In
<input type = 'text' placeholder = 'Enter Email' name = 'email' required>
<input type = 'password' placeholder = 'Enter Password' name = 'password' required>
<input type = 'password' placeholder = 'Re-enter Password' name = 'rpassword' required>
</div>
<div class = 'buttons'>
<button type = 'submit' name = 'signup' class = 'btn'>Submit</button>
<button type = 'button' class = 'btn cancel' onclick = 'toggle()'>Close</button>
</div>
</div>
</form>
</div>
</body>
<script>

function toggle() {
    var blur = document.getElementById( 'blur' );
    blur.classList.toggle( 'active' );
    var popup = document.getElementById( 'popup' );
    popup.classList.toggle( 'active' );
}
</script>
</html>
