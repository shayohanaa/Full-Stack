<?php
$current_page = basename($_SERVER['SCRIPT_NAME']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="header">
        <div class="inner-header">
            <div class="top-tools">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <?php echo 'Welcome back, <strong>' . $_SESSION['username'] . '</strong>'; ?>
                    <ul class="tools" style="display:flex; padding:0; list-style:none; justify-content:space-around;">
                        <li class="top-tool" style="font-size:25px;"><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                        <li class="top-tool" style="font-size:25px;"><a href="account.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        <li class="top-tool" style="font-size:25px;"><i class="fa fa-search" aria-hidden="true"></i></li>
                        <li class="top-tool" style="font-size:25px;"><i class="fa fa-question-circle-o" aria-hidden="true"></i></li>
                    </ul>
                <?php else: ?>
                    <?php echo 'Welcome <strong>guest.</strong>'; ?>
                    <ul class="tools" style="display:flex; padding:0; list-style:none; justify-content:space-around;">
                        <li class="top-tool" style="font-size:25px;"><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        <li class="top-tool" style="font-size:25px;"><i class="fa fa-search" aria-hidden="true"></i></li>
                        <li class="top-tool" style="font-size:25px;"><i class="fa fa-question-circle-o" aria-hidden="true"></i></li>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="menu">
                <ul style="display:flex; padding:0; list-style:none; justify-content:space-around;">
                    <?php if($current_page == 'about.php'): ?>
                    <li class="resources link active"><a href="about.php">About</a></li>
                    <li class="resources link"><a href="resources.php">Resources</a></li>
                    <li class="home link"><a href="index.php">Home</a></li>
                    <li class="services link"><a href="services.php">Services</a></li>
                    <li class="support link"><a href="support.php">Support</a></li>
                    <?php elseif($current_page == 'resources.php'): ?>
                    <li class="about link"><a href="about.php">About</a></li>
                    <li class="resources link active"><a href="resources.php">Resources</a></li>
                    <li class="home link"><a href="index.php">Home</a></li>
                    <li class="services link"><a href="services.php">Services</a></li>
                    <li class="support link"><a href="support.php">Support</a></li>
                    <?php elseif($current_page == 'index.php'): ?>
                    <li class="about link"><a href="about.php">About</a></li>
                    <li class="resources link"><a href="resources.php">Resources</a></li>
                    <li class="home link active"><a href="index.php">Home</a></li>
                    <li class="services link"><a href="services.php">Services</a></li>
                    <li class="support link"><a href="support.php">Support</a></li>
                    <?php elseif($current_page == 'services.php'): ?>
                    <li class="about link"><a href="about.php">About</a></li>
                    <li class="resources link"><a href="resources.php">Resources</a></li>
                    <li class="home link"><a href="index.php">Home</a></li>
                    <li class="services link active"><a href="services.php">Services</a></li>
                    <li class="support link"><a href="support.php">Support</a></li>
                    <?php elseif($current_page == 'support.php'): ?>
                    <li class="about link"><a href="about.php">About</a></li>
                    <li class="resources link"><a href="resources.php">Resources</a></li>
                    <li class="home link"><a href="index.php">Home</a></li>
                    <li class="services link"><a href="services.php">Services</a></li>
                    <li class="support link active"><a href="support.php">Support</a></li>
                    <?php else: ?>
                    <li class="about link"><a href="about.php">About</a></li>
                    <li class="resources link"><a href="resources.php">Resources</a></li>
                    <li class="home link"><a href="index.php">Home</a></li>
                    <li class="services link"><a href="services.php">Services</a></li>
                    <li class="support link"><a href="support.php">Support</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>