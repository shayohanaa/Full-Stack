<?php include 'Assets/config.php'; ?>
<?php
    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
    }
    if(isset($_GET['banned']))
    {
        $banned = $_GET['banned'];
        $banCount = $_GET['bandays'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <form action="logProcess.php" method="POST">
            <div class="form-group">
                <label for="username">Username or e-mail: </label>
                <input type="text" name="username" placeholder="Enter your username or e-mail">
            </div>
            <div class="form-group">
                <label for="pass">Password: </label>
                <input type="password" name="pass" placeholder="Enter your password">
            </div>
            <input type="submit" value="Reigster">
        </form>
        <?php if(isset($banned)): ?>
            <p><?php echo $banned; ?></p>
            <p class="red">This account restricted for <?php echo $banCount; ?> days.</p>
        <?php endif; ?>
    </div>
</body>
</html>