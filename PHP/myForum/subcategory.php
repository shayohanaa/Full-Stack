<?php include 'Assets/config.php'; ?>
<?php
    if(isset($_GET['categoryName']))
    {
        $categoryName = $_GET['categoryName'];
    }
?>
<?php
    if(isset($_GET['categoryId']))
    {
        $categoryId = $_GET['categoryId'];
    }
    $query = "SELECT * FROM posts WHERE subcategory_id = '$categoryId'";
    $results = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $categoryName; ?></title>
</head>
<body>
    <div class="container">
        <?php include 'header.php'; ?>
        <h3 class="text-center"><?php echo $categoryName; ?></h3>
        <a href="createPost.php?subcategoryId=<?php echo $categoryId; ?>" class="createPost"> + Create post</a>
        <div class="posts">
            <?php if($results && mysqli_num_rows($results) > 0): ?>
                <ul class="postslist">
                    <?php while($postRow = mysqli_fetch_assoc($results)): ?>
                        <li class="post">
                            <p>Subcategory id: <?php echo $postRow['subcategory_id']; ?></p>
                            <p>Username: <?php echo $postRow['username']; ?></p>
                            <p>Title: <?php echo $postRow['title']; ?></p>
                            <p>Description: <?php echo $postRow['description']; ?></p>
                            <p>Likes: <?php echo $postRow['likes']; ?></p>
                            <p>Create date: <?php echo $postRow['createDate']; ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <h5 class="text-center b-7 p-5">No posts.</h5>
            <?php endif; ?>
        </div>
        <br><br><br><br>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>