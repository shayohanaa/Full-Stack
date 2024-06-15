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
    <div class="registerForm">
        <h1 class="text-center">Register</h1>
        <form id="regForm" action="regProcess.php" method="POST">
            <div class="form-group">
                <label>Username: </label>
                <input type="text" name="username" placeholder="Choose username">
            </div>
            <div class="form-group">
                <label>First name: </label>
                <input type="text" name="firstname" placeholder="Enter your first name">
            </div>
            <div class="form-group">
                <label>Last name: </label>
                <input type="text" name="lastname" placeholder="Enter your last name">
            </div>
            <div class="form-group">
                <label>Email: </label>
                <input type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label>Confirm email: </label>
                <input type="text" name="cemail" placeholder="Confirm your email">
            </div>
            <div class="form-group">
                <label>Password: </label>
                <input type="password" name="pass" placeholder="Choose password">
            </div>
            <div class="form-group">
                <label>Confirm password: </label>
                <input type="password" name="cpass" placeholder="Confirm password">
            </div>
            <input type="submit" value="Sign Up">
        </form>
        <p class="text-center signlink">Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</div>
</body>
</html>