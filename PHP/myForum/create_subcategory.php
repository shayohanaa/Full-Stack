<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include your database connection file
include 'Assets/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(!empty($_POST['subcategory_name']) && !empty($_POST['subcategory_class'])
    && !empty($_POST['subcategory_imgUrl']) && !empty($_POST['subcategory_imgAlt']) && !empty($_POST['category_id']))
    {
        if($_POST['category_id'] == 'select')
        {
            header('Location: createSubcategory.php?error=Please%20select%20category%20parent');
            exit;
        }
        // Get the form data
        $subcategory_name = mysqli_real_escape_string($conn, $_POST['subcategory_name']);
        $subcategory_imgUrl = mysqli_real_escape_string($conn, $_POST['subcategory_class']);
        $subcategory_class = mysqli_real_escape_string($conn, $_POST['subcategory_imgUrl']);
        $subcategory_imgAlt = mysqli_real_escape_string($conn, $_POST['subcategory_imgAlt']);
        $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
        
        // Insert the new category into the database
        $query = "INSERT INTO subcategories (subcategory_name, subcategory_class, subcategory_imgUrl, subcategory_imgAlt, category_id) VALUES ('$subcategory_name', '$subcategory_imgUrl', '$subcategory_class', '$subcategory_imgAlt', '$category_id')";
    } else {
        header('Location: createSubcategory.php?error=Please%20fill%20in%20all%20fields.');
    }

    
    if (mysqli_query($conn, $query)) {
    header("Location: subcategory.php?categoryName=" . $subcategory_name . "&categoryId=" . $category_id);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>