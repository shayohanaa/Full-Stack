<?php include 'assets/config.php'; ?>
<?php
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
</head>
<body>
    <div class="container">
        <div class="header" id="header">
            <?php include 'header.php'; ?>
        </div>
        <div class="section text-center">
            <h1>Welcome</h1>
            <br>
            <?php if(isset($error)): ?>
                <div class="alert error"><?php echo $error; ?></div>
            <?php elseif(isset($success)): ?>
                <div class="alert success"><?php echo $success; ?></div>
            <?php endif; ?>
            <h2>Login:</h2>
            <form id="logForm" action="logProcess.php" method="POST">
                <div class="form-group">
                    <label for="username">Username / E-Mail: </label>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                    <label for="pass">Password: </label>
                    <input type="password" name="pass">
                </div>
                <input type="submit" value="Login">
            </form>
            <p>Doesn't have an account yet? <a href="register.php" class="sign">Sign up</a></p>
        </div>
        <div class="footer">
            <?php include 'footer.php'; ?>
        </div>
    </div>
</body>
</html>