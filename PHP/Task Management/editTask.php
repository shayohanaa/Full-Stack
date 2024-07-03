<?php include 'Assets/config.php'; ?>
<?php
    if(isset($_GET['taskId']))
    {
        $taskId = $_GET['taskId'];
    } else {
        header('Location: editTask.php?error=Task%20ID%20is%20missing.');
        exit;
    }

    $query = "SELECT * FROM tasks WHERE id = '$taskId'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <form action="editProcess.php?taskId=<?php echo $taskId; ?>" method="POST">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" placeholder="Previous title: <?php echo $row['title']; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" placeholder="Previous description: <?php echo $row['description']; ?>"></input>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
        <?php if(isset($error)): ?>
            <p class="red"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>