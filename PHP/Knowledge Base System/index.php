
<?php 
include 'Assets/config.php'; 
?>
<?php
    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
    }

    if(isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Registration & Accounts System.</title>
</head>
<body>
    <div class="container">
        <?php include 'header.php'; ?>
        <h1><?php echo $username; ?></h1>
    </div>
</body>
</html>