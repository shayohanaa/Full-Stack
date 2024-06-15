<?php include 'assets/config.php'; ?>
<?php 
    session_start();
    if(isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
    } elseif(isset($_COOKIE['user_id'])) {
        $userId = $_COOKIE['user_id'];
        $username = $_COOKIE['username'];
        $email = $_COOKIE['email'];
    } else {
        $userId = NULL;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cypher Hosting - Website Solution.</title>
</head>
<body>
    <?php if(isset($error)): ?>
        <div class="errortopMsg"><?php echo $error; ?></div>
    <?php endif; ?>
    <div class="container">
        <header>
            <?php include 'header.php'; ?>
        </header>
        <div class="hero">
            <div class="heroDetails" style="text-align:left; padding:25px;">
                <h1>Website Hosting</h1>
                <span class="heroDiscount" id="heroDiscount"> 
                    <i class="fa fa-hashtag" id="hashtag" aria-hidden="true" style="padding:3px;"></i>
                    Enjoy a 15% Discount on your first purchase
                </span>
                <h3 class="p-3">WordPress websites are customizable, user-friendly, and versatile for anyone.</h3>
                <div class="heroBtns">
                    <a href="#getstarted" class="getstarted">Get Started</a>
                    <a href="plans.php" class="pricingplans">Pricing & Plans
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="heroImg">
                <img src="assets/media/wordpress-background.png" alt="WordPress Admin-Panel" width="100%" height="250px;">
            </div>
        </div>
        <footer>
        <?php include 'footer.php'; ?>
        </footer>
    </div>
</body>
</html>