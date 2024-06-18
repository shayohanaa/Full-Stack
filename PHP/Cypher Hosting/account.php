<?php include 'assets/config.php'; ?>
<?php
    session_start();
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
<div class="container">
        <div class="header" id="header">
            <?php include 'header.php'; ?>
        </div>
        <div class="section text-center">
            <h1>Account</h1>
            <br><br>
            <div class="Accountmanager">
                <div class="Accountsections">
                <h3>Account Bar: </h3>
                    <ul>
                    <a href="account.php?section=general-information&User_id=<?php echo $userId; ?>">
                        <li class="accountSection">
                                General Information
                        </li>
                    </a>
                    <a href="account.php?section=security-settings&User_id=<?php echo $userId; ?>">
                        <li class="accountSection">
                                Security Settings
                        </li>
                    </a>
                    <a href="account.php?section=contact-information&User_id=<?php echo $userId; ?>">
                        <li class="accountSection">
                                Contact Information
                        </li>
                    </a>
                    <a href="account.php?section=order-history&User_id=<?php echo $userId; ?>">
                        <li class="accountSection">
                                Order History
                        </li>
                    </a>
                    <a href="account.php?section=subscription-information&User_id=<?php echo $userId; ?>">
                        <li class="accountSection">
                                Subscription Information
                        </li>
                    </a>
                    </ul>
                </div>
                <div class="Accountpanel">
                    <h3>Account Information: </h3>
                <?php 
                    $section = isset($_GET['section']) ? $_GET['section'] : ''; 

                    switch($section) {
                        case 'general-information':
                            include 'general-information.php';
                        break;

                        case 'security-settings':
                            include 'security-settings.php';
                        break;

                        case 'contact-information':
                            include 'contact-information.php';
                        break;

                        case 'order-history':
                            include 'order-history.php';
                        break;

                        case 'subscription-information':
                            include 'subscription-information.php';
                        break;
                    }
                ?>
                </div>
            </div>
        </div>
        <div class="footer">
            <?php include 'footer.php'; ?>
        </div>
    </div>
</body>
</html>