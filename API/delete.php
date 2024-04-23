<?php
require_once('connect.php');

if(isset($_GET['email'])){
    $email = $_GET['email'];

    // Using prepared statement to prevent SQL injection
    $sql = "DELETE FROM registration WHERE email=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    $result = mysqli_stmt_execute($stmt);

    if($result){
        echo '
        <script>
            alert("Delete Successful");
            window.location.href = "/TRAVELWEB/index.php";
        </script>
        ';
    }
    else{
        echo '
        <script>
            alert("Error occurred");
            window.location.href = "/TRAVELWEB/index.php";
        </script>
        ';
    }
}
?>
