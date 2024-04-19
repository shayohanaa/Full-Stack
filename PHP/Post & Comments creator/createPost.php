<?php include 'db.php'; ?>

<?php
    if(isset($_GET['error'])) 
    {
        $error = $_GET['error'];
    }

    if(isset($_POST['success'])) 
    {
        $success = $_GET['success'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form id="createPost" action="postProcess.php" method="post">
            <label>Name: </label>
            <input type="text" name="name">
            <br>
            <label>Title: </label>
            <input type="text" name="title">
            <br>
            <label>Category: </label>
            <input type="text" name="category">
            <br>
            <label>Content: </label>
            <input type="text" class="textarea" name="content">
            <br>
            <input type="submit" value="Create Post.">
        </form>
        <br><br>
        <?php if(isset($error)) :?>
            <?php echo $error; ?>
        <?php endif; ?>
    </div>
</body>
</html>