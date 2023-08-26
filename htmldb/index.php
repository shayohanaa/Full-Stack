<?php include 'db.php'; ?>

<?php 
    // SELECT QUERY
    $query = 'SELECT * FROM messages ORDER BY create_date DESC';
    $messages = mysqli_query($conn, $query);

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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>Message APP</header>
        <?php if(isset($error)): ?>
            <div class="alert"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if(isset($success)): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>
        <div class="main">
            <form method="POST" action="process.php">
                <input type="text" name="text" placeholder="Enter Text Message">
                <br>
                <input type="text" name="user" placeholder="Enter Username">
                <br>
                <input type="submit" value="SUBMIT">
            </form>
            <hr>
            <ul class="messages">
                <?php while($row = mysqli_fetch_assoc($messages)) : ?>
                <li><?php echo $row['text'];?> | <?php echo $row['user'];?> [<?php echo $row['create_date'];?>]</li>
                <?php endwhile; ?>
            </ul>
        </div>
        <footer>Copyright &copy; 2023</footer>
    </div>
</body>
</html>