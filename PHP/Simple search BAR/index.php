<?php include 'config.php'; ?>
<?php
    $searchKey = mysqli_real_escape_string($conn, $_GET['searched']);
    $sql = "SELECT * FROM names WHERE name = '$searchKey'";
    $query = mysqli_query($conn, $sql);
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
        <ul>
            <?php while($row = mysqli_fetch_assoc($query)): ?>
                <li><?php echo $row['name'];?></li>
                <li><?php echo $row['text'];?></li>
                <li><?php echo $row['age'];?></li>
            <?php endwhile; ?>
            <!-- <?php if(!$row): ?>
                <li>Name not found !</li>
            <?php endif; ?> -->
        </ul>
    </div>
</body>
</html>