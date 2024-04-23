<?php
require_once('connect.php');

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
        echo '<script>alert("Logout Successful");</script>';
    } else {
        // Error message if update fails
        echo '<script>alert("Error updating status");</script>';
    }
    
    // Close statement
    mysqli_stmt_close($stmt);
}

// Redirect to index.php regardless of success or failure
echo '<script>window.location.href = "/TRAVELWEB/index.php";</script>';

// Close connection
mysqli_close($con);
?>
