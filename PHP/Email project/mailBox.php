<?php
    $sql = 'SELECT * FROM email';
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
    <div class="mailbox">
        <ul>
            <?php while($row = mysqli_fetch_assoc($query)): ?>
                <a href="email.php?mailID=<?php echo $row['id']; ?>">
                    <li>
                        <div class="main overflowH flex">
                            <input type="checkbox" name="checkbox">
                            <p class="b-4 m-7"><?php echo $row['sender']; ?></p>
                        </div>
                        <div class="sendercontent overflowH text-left b-8">
                            <p><?php echo $row['content']; ?></p>
                        </div>
                        <div class="date b-7">
                            <p><?php echo $row['createDate']; ?></p>
                        </div>
                    </li>
                </a>
            <?php endwhile; ?>
            <?php if(!$query): ?>
                <p>inbox is empty.</p>
            <?php endif; ?>
        </ul>
    </div>
</body>
</html>