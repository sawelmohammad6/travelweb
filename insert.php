<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="travellovers";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:". mysqli_connect_error());
   // echo 'done';
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fullName = $_POST['full_name'];	
    $userName = $_POST['username'];
    $email	= $_POST['email'];
    $password = $_POST['password'];
    $phone	= $_POST['phone'];
    
    $sql = "INSERT INTO data
    VALUES ('$fullName','$userName','$email','$password', '$phone')"; 
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