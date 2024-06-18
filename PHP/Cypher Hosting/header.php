<?php
$current_page = basename($_SERVER['SCRIPT_NAME']); 
?>
<?php
    if(isset($_GET['error'])) 
    {
        $error = $_GET['error'];
    }
    if(isset($_GET['success'])) 
    {
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
<!-- <div class="header" id="header"> -->
        <div class="logo">
            <a href="index.php">
                <img src="assets/media/CypherHosting-LOGO-NOBG-WHITE.png" alt="Cypher-Hosting" />
            </a>
        </div>
        <nav class="main-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="product.php">Product</a></li>
            </ul>
        </nav>
        <div class="sidebar-icons">
            <div class="welcomeMsg">
                <?php if(isset($_SESSION['username'])): ?>
                    <?php $username = $_SESSION['username']; ?>
                    <p>Welcome, <strong><?php echo $username; ?></strong>.
                    <div class="logout">
                        <a href="logout.php" class="LogoutLink">
                            <div class="iconText iconLogout ">Logout</div>
                            <i style="font-size:1.8rem;" class="fa fa-sign-out p-4" aria-hidden="true"></i>
                        </a>
                    </div>
                    </p>
                <?php else: ?>
                    <p class="p-4">Welcome' Guest.</p>
                <?php endif; ?>
            </div>
            <div class="icons">
                <div class="icon">
                    <?php if(isset($_SESSION['username'])): ?>
                        <a href="account.php?section=general-information&User_id=<?php echo $userId; ?>"><i class="fa fa-user iconAcc" aria-hidden="true"></i></a>
                        <div class="iconText iconTextAcc none">Account</div>
                    <?php else: ?>
                        <a href="login.php"><i class="fa fa-user iconAcc" aria-hidden="true"></i></a>
                        <div class="iconText iconTextAcc none">Login</div>
                    <?php endif; ?>
                </div>
                <div class="icon">
                    <a href="#"><i class="fa fa-info iconInfo" aria-hidden="true"></i></a>
                    <div class="iconText iconTextInfo none">Info</div>
                </div>
                <div class="icon">
                    <a href="#"><i class="fa fa-question-circle-o iconHelp" aria-hidden="true"></i></a>
                    <div class="iconText iconTextHelp none">Help center</div>
                </div>
            </div>
        </div>
<!-- </div> -->
</body>
</html>