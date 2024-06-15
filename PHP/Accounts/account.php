<?php session_start(); ?>
<?php include 'assets/config.php'; ?>
<?php
    if(isset($_SESSION['user_id']))
    {
        $userId = $_SESSION['user_id'];
        $query = 'SELECT * FROM users WHERE id ='. $userId;
        $sql = mysqli_query($conn, $query);
    } else {
        header('Location: index.php?error=Please%20log%20in%20first.');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php if(isset($error)): ?>
        <div class="errortopMsg"><?php echo $error; ?></div>
    <?php endif; ?>
    <div class="container">
        <header>
            <?php include 'header.php'; ?>
        </header>
        <h1>Account</h1>
        <div class="account">
            <ul class="accountSections">
                <a href="account.php?section=general-settings">
                    <li class="accountSection">General settings</li>
                </a>
                <a href="account.php?section=account-information">
                    <li class="accountSection">Account information</li>
                </a>
                <a href="account.php?section=profile">
                    <li class="accountSection">Profile</li>
                </a>
                <a href="account.php?section=billing&payments">
                    <li class="accountSection">Billing & Payments</li>
                </a>
                <a href="account.php?section=order-history">
                    <li class="accountSection">Order history</li>
                </a>
            </ul>
            <div class="accountInfo">
                <?php 
                $section = isset($_GET['section']) ? $_GET['section'] : ''; 

                switch($section) {
                    case 'general-settings':
                        include 'general-settings.php';
                    break;

                    case 'account-information':
                        include 'account-information.php';
                    break;

                    case 'profile':
                        include 'profile.php';
                    break;

                    case 'billing&payments':
                        include 'billing-payments.php';
                    break;

                    case 'order-history':
                        include 'order-history.php';
                    break;
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>