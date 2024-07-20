<?php
include 'Assets/config.php';

if(isset($_GET['error']))
{
    $error = $_GET['error'];
}

if(isset($_GET['artId']))
{
    $artId = $_GET['artId'];
    $query = "SELECT * FROM articles WHERE id = '$artId'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
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
            <h1>Edit Article: </h1>
            <form action="updateartProcess.php?artId=<?php echo $artId; ?>" method="POST">
                <div class="form-group">
                    <label for="title">Edit title: </label>
                    <input type="text" name="title" value="<?php echo $row['title']; ?>">
                </div>
                <div class="form-group">
                    <label for="artText">Edit text: </label>
                    <textarea name="artText" id="artText"><?php echo $row['arttext']; ?></textarea>
                </div>
                <input type="submit" value="Submit">
            </form>
            <a href="article.php?artId=<?php echo $artId; ?>" style="color:#fff;">Cancel</a>
            <?php if(isset($error)): ?>
                <h4><?php echo $error; ?></h4>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>