<!-- Create Table name "users"
 columns -
 id(11) Auto-increment
 name(VARCHAR(255))
 username(VARCHAR(255))
 email(VARCHAR(255))
 password(VARCHAR(255))
 createDate(TIMESTAMP(6))
-->

<?php
    session_start();
    include 'Assets/config.php';
    if(isset($_SESSION['username']))
    {
        $user_id = $_SESSION['user_id'];
        $username = $_SESSION['username'];
    }
?>

<?php include 'Assets/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration system ONLY</title>
</head>
<body>
    <div class="container">
        <?php if(isset($_SESSION['username'])): ?>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php endif; ?>
        <div class="body">
            <?php if(isset($_SESSION['username'])): ?>
                <h3>Hello, <?php echo $username; ?></h3>
            <?php else: ?>
                <h3>Hello, Guest</h3>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>