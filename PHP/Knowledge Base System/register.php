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
        <form action="regProcess.php" class="signForm" method="POST">
        <h1>Register</h1>
            <?php if(isset($error)): ?>
                <?php echo $error ?>
            <?php endif; ?>
            <div class="form-group">
                <label for="name">Full name: </label>
                <input type="text" name="name">
            </div>
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label for="email">E-mail: </label>
                <input type="text" name="email">
            </div>
            <div class="form-group">
                <label for="cemail">Confirm E-mail: </label>
                <input type="text" name="cemail">
            </div>
            <div class="form-group">
                <label for="pass">Password: </label>
                <input type="password" name="pass">
            </div>
            <div class="form-group">
                <label for="cpass">Confirm password: </label>
                <input type="password" name="cpass">
            </div>
            <div class="form-group">
                <p>By creating an account,
                    you agree to our
                    <a href="terms-of-service.php" class="checkPolicies">Terms of Service </a> 
                    and 
                    <a href="privacy-policy.php" class="checkPolicies">Privacy Policy </a> . 
                    <br><strong>Please read them carefully.</strong>
                </p>
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
            <input type="submit" class="signBtn" value="Register">
            <p>Already have an account? <a href="login.php" class="sign">Login</a.></p>
        </form>
    </div>
</body>
</html>