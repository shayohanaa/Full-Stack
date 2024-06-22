<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header('Location: index.php');
}
include 'Assets/config.php'; 
?>
<?php
    if(isset($_GET['subcategoryId']))
    {
        $subcategoryId = $_GET['subcategoryId'];
    }
    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <div class="container">
    <?php include 'header.php'; ?>
        <div class="postCreate">
            <h1 class="text-center">Create Post: </h1>
            <?php if(isset($error)): ?>
                <div class="alert error"><?php echo $error; ?></div>
            <?php endif; ?>
            <form action="postProcess.php?subcategoryId=<?php echo $subcategoryId; ?>" method="POST">
                <div class="form-group">
                    <label for="title">Title: </label>
                    <input type="text" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description: </label>
                    <input type="text" name="description">
                </div>
                <input type="submit" style="text-align:center; width:150px; background-color:#ff6600; color:#fff; border-radius:10px; border:1px solid #000; position:relative; left:50%; transform:translateX(-50%); padding:10px; margin:10px 0;" value="Create Post">
            </form>
        </div>
    <?php include 'footer.php'; ?>
    </div>
</body>
</html>