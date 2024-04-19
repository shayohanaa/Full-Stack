<?php include 'db.php'; ?>

<?php
    $postID = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM posts WHERE id = ' $postID'";
    $result = mysqli_query($conn, $sql);

    $comment = "SELECT * FROM comments WHERE postID = '$postID'";
    $select = mysqli_query($conn, $comment);

    if(!mysqli_query($conn, $sql)) {
        die(mysqli_error($conn));
    } else {
        $postContent = mysqli_fetch_assoc($result);
        echo "
        <div class='results'>
            <ul>
                <li>Date created: ". $postContent['createDate'] ."</li>
                <li>Name: ". $postContent['name'] ."</li>
                <li>Title: ". $postContent['title'] ."</li>
                <li>Category: ". $postContent['category'] ."</li>
                <li>Content: ". $postContent['content'] ."</li>
            </ul>
        </div>
        <a href='comment.php?commentpostID=". $postID ."'>Comment</a>
        <br>
        <div class='comments'>
            <h3>Comments: </h3>
            <br>
        </div>
        ";
    }
?>

    <?php while($commentRow = mysqli_fetch_assoc($select)): ?>
        <h3><?php echo $commentRow['content']; ?></h3>
    <?php endwhile; ?>