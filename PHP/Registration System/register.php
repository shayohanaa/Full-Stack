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
    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <form action="regProcess.php" method="POST">
            <div class="form-group">
                <label for="name">Full name: </label>
                <input type="text" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="email">E-mail: </label>
                <input type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="cemail">Confirm e-mail: </label>
                <input type="text" name="cemail" placeholder="re-enter your email">
            </div>
            <div class="form-group">
                <label for="pass">Password: </label>
                <input type="password" name="pass" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <label for="cpass">Confirm password: </label>
                <input type="password" name="cpass" placeholder="re-enter your password">
            </div>
            <input type="submit" value="Reigster">
        </form>
    </div>
</body>
</html>