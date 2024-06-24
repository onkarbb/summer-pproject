<?php
// Simple user registration script

// Dummy database
$users = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    // Save user to dummy database (in practice, save to a real database)
    $users[$username] = $password;
    
    echo "User registered successfully!";
}
?>
