<?php include 'assets/config.php'; ?>
<?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    }

    if (isset($_GET['success'])) {
        $success = $_GET['success'];
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
    <header>
        <?php include 'header.php'; ?>
    </header>
    <br><br>
    <?php if(isset($error)): ?>
        <div class="alert error">
            <p><?php echo $error; ?></p>
        </div>
    <?php endif; ?>

    <?php if(isset($success)): ?>
        <div class="alert success">
            <p><?php echo $success; ?></p>
        </div>
    <?php endif; ?>
    <div class="loginForm">
        <h1 class="text-center">Login</h1>
        <form id="logForm" action="logProcess.php" method="POST">
            <div class="form-group">
                <label for="username">Username or email:</label>
                <input type="text" id="username" name="username" placeholder="Enter username or email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" placeholder="Enter your password">
            </div>
            <input type="submit" value="Sign In">
        </form>
        <p class="text-center signlink">Don't have an account yet? <a href="register.php">Sign up</a>.</p>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</div>
</body>
</html>