<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include your database connection file
include 'Assets/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST['category_name']) && !empty($_POST['category_class'])
    && !empty($_POST['category_imgUrl']) && !empty($_POST['category_imgAlt']))
    {
        // Get the form data
        $category_name = mysqli_real_escape_string($conn, $_POST['category_name']);
        $category_class = mysqli_real_escape_string($conn, $_POST['category_class']);
        $category_imgUrl = mysqli_real_escape_string($conn, $_POST['category_imgUrl']);
        $category_imgAlt = mysqli_real_escape_string($conn, $_POST['category_imgAlt']);

        // Insert the new category into the database
        $query = "INSERT INTO categories (category_name, category_imgUrl, category_class, category_imgAlt) VALUES ('$category_name', '$category_imgUrl', '$category_class', '$category_imgAlt')";
    } else {
        header('Location: createCategory.php?error=Please%20fill%20in%20all%20fields.');
    }

    

    if (mysqli_query($conn, $query)) {
        header('Location: index.php?Category%20Created.');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>