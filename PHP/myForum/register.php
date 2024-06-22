<?php 
session_start();
if(isset($_SESSION['username']))
{
    header('Location: account.php');
}
include 'Assets/config.php'; 
?>
<?php
    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
    } elseif(isset($_GET['success'])) 
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
        <?php include 'header.php'; ?>
            <form id="regForm" class="text-center p-2 signForm" action="Assets/regProcess.php" method="POST">
                <h3>Register: </h3>
                <?php if(isset($error)): ?>
                    <div class="alert error">
                        <h3><?php echo $error; ?></h3>
                    </div>
                <?php elseif(isset($success)): ?>
                    <div class="alert success">
                        <h3><?php echo $success; ?></h3>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Enter a username">
                </div>
                <div class="form-group">
                    <label for="name">Full name</label>
                    <input type="text" name="name" placeholder="Enter full name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Enter a email">
                </div>
                <div class="form-group">
                    <label for="cemail">Confirm email</label>
                    <input type="text" name="cemail" placeholder="Enter a email">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" placeholder="Enter a password">
                </div>
                <div class="form-group">
                    <label for="cpass">Confirm password: </label>
                    <input type="password" name="cpass" placeholder="Confirm password">
                </div>
                <input type="submit" value="Register" class="signBtn">
            </form>
            <p class="createP">Have an account already? <a href="account.php">Click here</a></p>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>