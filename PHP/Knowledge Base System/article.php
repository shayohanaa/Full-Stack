<?php
include 'Assets/config.php';
    if(isset($_GET['artId']))
    {
        $artId = $_GET['artId'];
        $query = "SELECT * FROM articles WHERE id = '$artId'";
        $results = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($results);
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
        <div class="article">
            <div class="content">
                <h1>Article <?php echo htmlspecialchars($row['title']); ?>
                    <br>
                    <span style="font-size:15px;">Created by: <?php echo $row['username']; ?></span>
                </h1>
                <p><?php echo nl2br(htmlspecialchars($row['arttext'])); ?></p>
                <p>
                    This article was last updated at - 
                    <strong>
                        <?php 
                            $date = new DateTime($row['last_update']);
                            echo $date->format('d/m/y l -  h:ia');
                        ?>
                    </strong>
                    <br>
                    <a href="editArticle.php?artId=<?php echo $row['id']; ?>" class="black b-8">Edit article</a>
                    <br>
                    <a href="delArticle.php?artId=<?php echo $row['id']; ?>" class="delArt b-8">Delete article</a>
                </p>
            </div>
            <div class="likeornot">
                <p class="text-center b-6">Was this article helpful?</p>
                <div class="vote">
                    <a href="likeArt.php?artId=<?php echo $artId; ?>">
                        <i class="fa fa-thumbs-up" style="font-size:25px;" aria-hidden="true"></i>
                        <span><?php echo $row['liked']; ?></span>
                    </a>
                    <a href="dislikeArt.php?artId=<?php echo $artId; ?>">
                        <i class="fa fa-thumbs-down" style="font-size:25px;" aria-hidden="true"></i>
                        <span><?php echo $row['disliked']; ?></span>
                    </a>
                </div>
            </div>
            <?php if(isset($$noArticles)): ?>
                <?php echo $$noArticles; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>