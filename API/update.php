<?php
require_once('connect.php');



if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fullName = $_POST['name'];
    $email	= $_POST['email'];
    $password = $_POST['password'];
    $phone	= $_POST['phone'];
    
    $sql = "UPDATE registration
            SET name = '$fullName', email = '$email', password = '$password', phone = '$phone'
            WHERE email='$email'"; // Removed the extra comma before WHERE
    $result = mysqli_query($con,$sql);

    if ($result)
        echo '
        <script>
            alert("Details Updated Successfully!");
            window.location.href = "/TRAVELWEB/index.php";
        </script>
        ';
    }
    else{
        echo 'Error: ' . $sql . ' ' . mysqli_error($con);
    }
    mysqli_close($con);
?>
