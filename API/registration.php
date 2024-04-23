<?php
require_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize input data to prevent SQL injection
    $fullName = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO registration (full_name, email, phone, password)
            VALUES ('$fullName', '$email', '$phone', '$hashedPassword')";

    if (mysqli_query($conn, $sql)) {
        echo 'New Details Entry Inserted Successfully!';
    } else {
        echo 'Error: ' . $sql . ' ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
