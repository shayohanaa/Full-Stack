<?php include 'db.php'; ?>

<?php
    if(!empty($_POST['comment']))
    {
        $postID = mysqli_real_escape_string($conn, $_GET['commentpostID']);
        $content = $_POST['comment'];
        $sql = "CREATE TABLE IF NOT EXISTS comments (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            postID VARCHAR(30) NOT NULL,
            content VARCHAR(1000) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) === TRUE) {
            header('Location: post.php?id='. $postID);
        } else {
            echo "Error creating table: " . $conn->error . "<br>";
        }

        $insertcomment = "INSERT INTO comments (postID, content) VALUES (
            '$postID', '$content'
        )";

        if ($conn->query($insertcomment) === TRUE) {
            header('Location: post.php?id='. $postID);
        } else {
            echo "Error inserting record: " . $conn->error . "<br>";
        }
    } else {
        header('Location: comment.php?error=Fill%20Input&commentpostID='. $postID);
    }
?>