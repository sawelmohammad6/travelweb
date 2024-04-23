<?php
require_once('connect.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fullName = $_POST['full_name'];
    $email	= $_POST['email'];
    $password = $_POST['password'];
    $phone	= $_POST['phone'];
    
    $sql = "INSERT INTO registration
    VALUES ('$fullName','$email','$phone', '$password')"; 
    $result = mysqli_query($conn,$sql);

    if ($result)
    {
        echo 'New Details Entry Inserted Successfully !';
    }
    else{
        echo 'Error: ' . $sql . '' . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>