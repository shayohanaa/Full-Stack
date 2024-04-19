<?php include 'db.php'; ?>

<?php
    if(!empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['category'])
    && !empty($_POST['content']))
    {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);

        $query = "INSERT INTO posts (name, title, category, content) VALUES(
            '$name', '$title', '$category', '$content')";

        if(!mysqli_query($conn, $query)) {
            die(mysqli_error($query));
        } else {
            header('Location: index.php?success=success');
        }
    } else {
        header('Location: createPost.php?error=Fill%20all%20fields.');
    }
?>