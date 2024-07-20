<?php
include 'Assets/config.php';

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
</head>
<body>
    <div class="container">
        <?php include 'header.php'; ?>
        <div class="createArticle">
            <h1>Create Article: </h1>
            <form action="createartProcess.php" method="POST">
                <div class="form-group">
                    <label for="title">Enter title: </label>
                    <input type="text" name="title">
                </div>
                <div class="form-group">
                    <label for="artText">Enter text: </label>
                    <textarea name="artText" id="artText"></textarea>
                </div>
                <input type="submit" value="Submit">
            </form>
            <?php if(isset($error)): ?>
                <h4><?php echo $error; ?></h4>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>