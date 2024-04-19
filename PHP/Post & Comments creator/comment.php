<?php include 'db.php'; ?>

<?php
    $postID = mysqli_real_escape_string($conn, $_GET['commentpostID']);

    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
    }

    if(isset($_GET['success']))
    {
        $success = $_GET['success'];
    }
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
        <form action='commentProcess.php?commentpostID=<?php echo $postID; ?>&content=' method="POST">
            <input type="text" name="comment">
            <input type="submit" value="Submit">
        </form>
        <?php if(isset($error)) : ?>
            <h3><?php echo $error; ?></h3>
        <?php endif; ?>
    </div>
</body>
</html>