<?php
$enteredPassword = $_POST['password'];
$correctPassword = "144"; // Replace "your_password_here" with the actual password

if ($enteredPassword === $correctPassword) {
    echo "Correct password entered!";
} else {
    echo "Incorrect password. Please try again.";
}
?>