<?php include 'Assets/config.php'; ?>
<?php
    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Registration & Accounts System.</title>
</head>
<body>
    <div class="container">
    <?php include 'header.php'; ?>
        <form action="logProcess.php" class="signForm" method="POST">
        <h1>Login</h1>
            <?php if(isset($error)): ?>
                <?php echo $error ?>
            <?php endif; ?>
            <div class="form-group">
                <label for="username">Username or E-mail: </label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label for="pass">Password: </label>
                <input type="password" name="pass">
            </div>
            <div class="signNav">
                <span class="rememberme">
                    <input type="checkbox" name="rememberme">
                    <p>Remember me</p>
                </span>
                <span class="forgotpass">
                    <a href="#">Forgot password?</a>
                </span>
            </div>
            <input type="submit" class="signBtn" value="Login">
            <p>Doesn't have an account yet? <a href="register.php" class="sign">Register</a.></p>
        </form>
    </div>
</body>
</html>