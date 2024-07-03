<?php include 'Assets/config.php'; ?>
<?php
    $query = 'SELECT * FROM complete';
    $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="green">Completed tasks.</h1>
        <ul class="list">
            <?php if($result && mysqli_num_rows($result) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <li>
                    <p><?php echo $row['taskId']; ?>. </p>
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                </li>
                <?php endwhile; ?>
                <?php else: ?>
                <p>No completed tasks found.</p>
            <?php endif; ?>
        </ul>
        <a href="index.php">Back Homepage</a>
    </div>
</body>
</html>