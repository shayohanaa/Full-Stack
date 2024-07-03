
<?php include 'Assets/config.php'; ?>
<?php
    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
    }

    $query = 'SELECT * FROM tasks';
    $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pHp</title>
</head>
<body>
    <div class="container">
        <div class="taskManagement">
            <form action="createTask.php" method="POST">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
            <?php if(isset($error)): ?>
                <p class="red"><?php echo $error; ?></p>
            <?php endif; ?>
        </div>
        <div class="allTasks">
            <ul>
                <?php if($result && mysqli_num_rows($result) > 0): ?>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <li class="task" id="<?php echo $row['id']; ?>">
                            <h3><?php echo $row['title']; ?></h3>
                            <p><?php echo $row['description']; ?></p>
                            <div class="buttons">
                                <a href="editTask.php?taskId=<?php echo $row['id']; ?>">Edit</a>
                                <a href="archive.php?taskId=<?php echo $row['id']; ?>">Archive</a>
                                <a href="complete.php?taskId=<?php echo $row['id']; ?>">Complete</a>
                                <a href="delete.php?taskId=<?php echo $row['id']; ?>">Delete</a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <p>No active tasks found.</p>
                <?php endif; ?>
            </ul>
            <div class="viewtasks">
                <a href="archived.php">View archived tasks.</a>
                <a href="completed.php">View completed tasks.</a>
            </div>
        </div>
    </div>
</body>
</html>