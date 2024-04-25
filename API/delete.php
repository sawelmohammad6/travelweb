<?php
require_once('connect.php');

if(isset($_GET['email'])){
    $email = $_GET['email'];

    // Using prepared statement to prevent SQL injection
    $sql = "DELETE FROM registration WHERE email=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    $result = mysqli_stmt_execute($stmt);

    if($result){

        // Assuming $con is the database connection variable

        // Prepare and execute the SELECT query
        $query = "SELECT * FROM status";
        $result = mysqli_query($con, $query);

        // Check for errors in the SELECT query
        if (!$result) {
            die("Error: " . mysqli_error($con));
        }

        // Fetch the first row
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        // Check if a row was fetched
        if ($row) {
            $email = $row['email'];

            // Prepare and execute the UPDATE query
            $sql = "UPDATE status SET state='NO' WHERE email=?";
            $stmt = mysqli_prepare($con, $sql);
            
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "s", $email);
            
            // Execute the statement
            $success = mysqli_stmt_execute($stmt);
            
            // Check if the update was successful
            if ($success) {
                // Success message
                echo '
                <script>
                    alert("Delete Successful");
                    window.location.href = "/TRAVELWEB/index.php";
                </script>
                ';
            } else {
                // Error message if update fails
                echo '<script>alert("Error updating status");
                window.location.href = "/TRAVELWEB/index.php";</script>';
            }
            
            // Close statement
            mysqli_stmt_close($stmt);
        }
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
