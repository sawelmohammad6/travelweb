<?php
require_once('connect.php');
if(isset($_GET['email'])){
    $email=$_GET['email'];

    $sql="DELETE FROM registration WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo '
        <script>
            alert("Delete Sucessfull");
            window.location.href = "/TRAVELWEB/index.php";
        </script>
        ';
    }
    else{
        echo '
        <script>
            alert("Error accur");
            window.location.href = "/TRAVELWEB/index.php";
        </script>
        ';
    }
}
?>