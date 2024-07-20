<?php 
    if(isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
        $user_id = $_SESSION['user_id'];
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
<!-- <div class="container"> -->
    <header class="header">
        <div class="logo">
            <A href="index.php">
                <img src="Assets/media/LOGO.png" alt="LOGO">
            </a>
        </div>
        <nav class="search">
            <form class="searchInput" action="searchBar.php" method="POST">
                <input type="text" name="search" placeholder="Search ...">
                <a href="searchProcess.php"><i class="fa fa-search searchIcon" style="font-size:28px;" aria-hidden="true"></i></a>
            </form>
        </nav>
        <div class="sidebar-links">
            <ul>
                <?php if(isset($username)): ?>
                    <li><a href="#account"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <span class="none">Account</span>
                    </li>
                    <li><a href="#Notifications"><i class="fa fa-bell" aria-hidden="true"></i></a>
                        <span class="none">Notifications</span>
                    </li>
                    <li><a href="#Favorites"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        <span class="none">Favorites</span>
                    </li>
                    <li><a href="#help"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                        <span class="none">Help</span>
                    </li>
                    <li><a href="knowledgebase.php"><i class="fa fa-question" aria-hidden="true"></i></a>
                        <span class="none" style="padding-left:25px; padding-right:25px;">Knowledge base</span>
                    </li>
                    <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                        <span class="none">Logout</span>
                    </li>
                <?php else: ?>
                    <li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <span class="none">Login</span>
                    </li>
                    <li><a href="login.php"><i class="fa fa-bell" aria-hidden="true"></i></a>
                        <span class="none">Notifications</span>
                    </li>
                    <li><a href="login.php"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        <span class="none">Favorites</span>
                    </li>
                    <li><a href="login.php"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                        <span class="none">Help</span>
                    </li>
                    <li><a href="knowledgebase.php"><i class="fa fa-question" aria-hidden="true"></i></a>
                        <span class="none" style="padding-left:25px; padding-right:25px;">Knowledge base</span>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </header>
<!-- </div> -->
</body>
</html>
