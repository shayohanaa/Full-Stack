<?php include 'assets/config.php'; ?>
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
            <h2>Register:</h2>
            <form id="regForm" action="regProcess.php" method="POST">
                <div class="form-group">
                    <label for="name">Full name: </label>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="username">User name: </label>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                    <label for="email">E-mail Address: </label>
                    <input type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="cemail">Confirm E-mail Address: </label>
                    <input type="text" name="cemail">
                </div>
                <div class="form-group">
                    <label for="pass">Password: </label>
                    <input type="password" name="pass">
                </div>
                <div class="form-group">
                    <label for="cpass">Confirm Password: </label>
                    <input type="password" name="cpass">
                </div>
                <input type="submit" value="Register">
            </form>
            <p>Already have an account? <a href="login.php" class="sign">Sign in</a></p>
        </div>
        <div class="footer">
            <?php include 'footer.php'; ?>
        </div>
    </div>
</body>
</html>