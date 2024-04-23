<?php
require_once('connect.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email	= $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM registration WHERE email= '$email'"; 
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count==1){
        $username=$row['name'];
        $sql="DELETE FROM status;";
        $result = mysqli_query($con ,$sql);
        $sql = "INSERT INTO status VALUES ('$username','$email','YES')";
        $result = mysqli_query($con ,$sql);
        echo '
        <script>
            window.location.href = "/TRAVELWEB/index.php";
        </script>';
    }
    else{
        echo '
        <script>
            alert("Login failed. Username or password invalid");
            window.location.href = "/TRAVELWEB/login.php";
        </script>
        ';
    }
}
?>