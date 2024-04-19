<?php include 'db.php'; ?>

<?php
    $insert = 'SELECT * FROM posts ORDER BY createDate DESC';
    $query = mysqli_query($conn, $insert);
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
        <div class="posts">
            <?php while($row = mysqli_fetch_assoc($query)): ?>
            <ul id="<?php echo $row['id']; ?>">
                <li>Date created: <?php echo $row['createDate']; ?></li>
                <li>Name: <?php echo $row['name']; ?></li>
                <li>Category: <?php echo $row['category']; ?></li>
                <li>Title: <?php echo $row['title']; ?></li>
                <li><a href="post.php?id=<?php echo $row['id']; ?>">Show post</a></li>
                <li><a href="deletePost.php?deletepostID=<?php echo $row['id'];?>">Delete post</a></li>
            </ul>
            <?php endwhile ; ?>
        </div>
        <a href="createPost.php">Create post</a>
    </div>

    <Script src="scripts.js"></script>
</body>
</html>