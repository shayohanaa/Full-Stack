<?php 
include 'assets/config.php';
$delID = $_GET['delAcc'] ?? null;
if ($delID !== null) {
    $id = intval($delID); // Ensure the ID is an integer

    // Prepare and execute the DELETE statement
    $sql = 'DELETE FROM users WHERE id = ' . $id;
    $query = mysqli_query($conn, $sql);

    if ($query) {
        // Perform redirection after delay
        session_start();
        session_unset();
        session_destroy();
        header("Refresh:3; url=index.php");
        echo 'Account has been deleted successfully.';
    } else {
        echo 'Error deleting account: ' . mysqli_error($conn);
    }
} else {
    echo 'No ID provided to delete.';
}

// Close the connection
$conn->close();
?>