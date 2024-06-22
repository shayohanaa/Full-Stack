<?php 
session_start();
include 'Assets/config.php'; 
?>
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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include 'header.php'; ?>
            <?php if(!isset($_SESSION['username'])): ?>
                <form id="logForm" class="text-center p-2 signForm" action="logProcess.php" method="POST">
                    <h3>Login: </h3>
                    <?php if(isset($error)): ?>
                        <div class="alert error">
                            <h3><?php echo $error; ?></h3>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="username">Username or E-mail: </label>
                        <input type="text" name="username" placeholder="Enter username or E-mail">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password: </label>
                        <input type="password" name="pass" placeholder="Enter password">
                    </div>
                    <input type="submit" value="Login" class="signBtn">
                </form>
                <p class="createP">Doesn't have an account yet? <a href="register.php">Click here</a></p>
            <?php else: ?>
                <h3 class="text-center">Account manager: </h3>
                <div class="accountmanager p-2 text-center">
                    <div class="accountNav">
                        <ul>
                            <a href="account.php?section=general-settings">
                                <li class="accountSection">General settings</li>
                            </a>
                            <a href="account.php?section=account-information">
                                <li class="accountSection">Account information</li>
                            </a>
                            <a href="account.php?section=profile">
                                <li class="accountSection">Profile</li>
                            </a>
                            <a href="account.php?section=posts-messages">
                                <li class="accountSection">My Posts & Messages</li>
                            </a>
                            <a href="account.php?section=notifications">
                                <li class="accountSection">Notifications</li>
                            </a>
                            <a href="Assets/logout.php">
                                <li class="accountSection Logout">Logout</li>
                            </a>
                        </ul>
                    </div>
                    <div class="accountManage">
                    <?php 
                        $section = isset($_GET['section']) ? $_GET['section'] : ''; 

                        switch($section) {
                            case 'general-settings':
                                include 'Assets/general-settings.php';
                            break;

                            case 'account-information':
                                include 'Assets/account-information.php';
                            break;

                            case 'profile':
                                include 'Assets/profile.php';
                            break;

                            case 'posts-messages':
                                include 'Assets/post-messages.php';
                            break;

                            case 'notifications':
                                include 'Assets/notifications.php';
                            break;
                        }
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>