<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class="header">
        <div class="logo">
            <A href="index.php">
                <img src="Assets/media/myForum.png" alt="myForum">
            </a>
        </div>
        <nav class="search">
            <form class="searchInput" action="searchBar.php" method="POST">
                <input type="text" name="search" placeholder="Search ...">
                <i class="fa fa-search searchIcon" style="font-size:28px;" aria-hidden="true"></i>
            </form>
        </nav>
        <a href="createCategory.php">Create category</a>
        <a href="createSubcategory.php">Create subcategory</a>
        <div class="sidebar-links">
            <ul>
                <li><a href="account.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                    <span class="none">Account</span>
                </li>
                <li><a href="#help"><i class="fa fa-comments-o" aria-hidden="true"></i></a>
                    <span class="none">Chat</span>
                </li>
                <li><a href="#help"><i class="fa fa-bell" aria-hidden="true"></i></a>
                    <span class="none">Notifications</span>
                </li>
                <li><a href="#help"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    <span class="none">Favorites</span>
                </li>
                <li><a href="#help"><i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                    <span class="none">Help</span>
                </li>
            </ul>
        </div>
        <button class="goUp p-2 m-3" id="goUp" style="font-size:1.5rem; position:fixed; top:90%; right:0%;">
            <div class="goupicon">
                <i class="fa fa-angle-double-up" aria-hidden="true"></i>
            </div>
            <div>.</div>
        </button>
    </header>
</body>
</html>
