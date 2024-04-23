<?php
require_once('connect.php');
if(isset($_GET['email'])){
    $mail = $_GET['email'];
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fullName = $_POST['full_name'];
    $email	= $_POST['email'];
    $password = $_POST['password'];
    $phone	= $_POST['phone'];
    
    $sql = "UPDATE registration
            SET name = '$fullname', email = '$email', password = '$password',phone = '$phone',
            WHERE email='$mail';"; 
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