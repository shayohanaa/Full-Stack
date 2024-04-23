
<?php 
$sql2 = 'SELECT COUNT(*) AS total_mails FROM email'; 
$query2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($query2);

$sql3 = "SELECT COUNT(*) AS starred_count FROM email WHERE starred = 1";
$query3 = mysqli_query($conn, $sql3);

$sql4 = "SELECT COUNT(*) AS snoozed_count FROM email WHERE snoozed = 1";
$query4 = mysqli_query($conn, $sql4);

$sql5 = "SELECT COUNT(*) AS allinbox_count FROM email WHERE allinbox = 1";
$query5 = mysqli_query($conn, $sql5);

$sql6 = "SELECT COUNT(*) AS spam_count FROM email WHERE spam = 1";
$query6 = mysqli_query($conn, $sql6);

$sql7 = "SELECT COUNT(*) AS trash_count FROM email WHERE trash = 1";
$query7 = mysqli_query($conn, $sql7);

$sql8 = "SELECT COUNT(*) AS important_count FROM email WHERE important = 1";
$query8 = mysqli_query($conn, $sql8);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="sideBar bg-black5">
        <div class="header grid text-left">
            <div class="icon fs-4">
                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
            </div>
            <h5 class="fs-7 bold">J-mail</h5>
        </div>
        <div class="compose text-left m-1">
            <i class="fa fa-envelope-o fs-4" aria-hidden="true"></i>
            <button class="text-cap">compose</button>
        </div>
        <div class="links m-4 fs-1">
            <ul>
                <a href="index.php"><li class="text-left"><i class="fa fa-inbox m-1" aria-hidden="true"></i>Inbox<span class="m-1">
                    <?php
                    if ($row2) {
                        $totalMails = $row2['total_mails'];
                        echo $totalMails;
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                    ?>
                </span></li></a>
                <a href="starred.php"><li id="starred" class="text-left"><i class="fa fa-star-o m-1" aria-hidden="true"></i>Starred<span class="m-1">
                    <?php
                    if ($query3) {
                        $result = mysqli_fetch_assoc($query3);
                        $starredCount = $result['starred_count'];
                        echo $starredCount;
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                    ?>
                </span></li></a>
                <a href="#"><li class="text-left"><i class="fa fa-clock-o m-1" aria-hidden="true"></i>Snoozed<span class="m-1">
                    <?php
                    if ($query4) {
                        $result = mysqli_fetch_assoc($query4);
                        $snoozedCount = $result['snoozed_count'];
                        echo $snoozedCount;
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                    ?>
                </span></li></a>
                <a href="#"><li class="text-left"><i class="fa fa-paper-plane m-1" aria-hidden="true"></i>Sent</li></a>
                <a href="#"><li class="text-left"><i class="fa fa-book m-1" aria-hidden="true"></i>Drafts</li></a>
                <div class="pointer" id="showMore">
                    <div class="text-left more">
                        <i onclick="toggleLinks()" class="fa fa-caret-down m-1" aria-hidden="true"></i>More
                    </div>
                    <div id="subLinks" class="subLinks none">
                        <ul>
                            <a href="#"><li class="text-left"><i class="fa fa-inbox m-5" aria-hidden="true"></i>Important<span class="m-1">
                            <?php
                            if ($query8) {
                                $result = mysqli_fetch_assoc($query8);
                                $importantCount = $result['important_count'];
                                echo $importantCount;
                            } else {
                                echo "Error: " . mysqli_error($conn);
                            }
                            ?>
                            </span></li></a>
                            <a href="#"><li class="text-left"><i class="fa fa-comments-o m-5" aria-hidden="true"></i>Chats</li></a>
                            <a href="#"><li class="text-left"><i class="fa fa-calendar-times-o m-5" aria-hidden="true"></i>Scheduled</li></a>
                            <a href="#"><li class="text-left"><i class="fa fa-envelope m-5" aria-hidden="true"></i>All mail<span class="m-1">
                            <?php
                            if ($query5) {
                                $result = mysqli_fetch_assoc($query5);
                                $allinboxCount = $result['allinbox_count'];
                                echo $allinboxCount;
                            } else {
                                echo "Error: " . mysqli_error($conn);
                            }
                            ?>
                            </span></li></a>
                            <a href="#"><li class="text-left"><i class="fa fa-ban m-5" aria-hidden="true"></i>Spam<span class="m-1">
                            <?php
                            if ($query6) {
                                $result = mysqli_fetch_assoc($query6);
                                $spamCount = $result['spam_count'];
                                echo $spamCount;
                            } else {
                                // Query failed, handle the error
                                echo "Error: " . mysqli_error($conn);
                            }
                            ?>
                            </span></li></a>
                            <a href="#"><li class="text-left"><i class="fa fa-trash m-5" aria-hidden="true"></i>Trash<span class="m-1">
                            <?php
                            if ($query7) {
                                $result = mysqli_fetch_assoc($query7);
                                $trashCount = $result['trash_count'];
                                echo $trashCount;
                            } else {
                                // Query failed, handle the error
                                echo "Error: " . mysqli_error($conn);
                            }
                            ?>
                            </span></li></a>
                            <a href="#"><li class="text-left"><i class="fa fa-bars m-5" aria-hidden="true"></i>Categories</li></a>
                            <a href="#"><li class="text-left"><i class="fa fa-cog m-5" aria-hidden="true"></i>Manage labels</li></a>
                            <a href="#"><li class="text-left"><i class="fa fa-plus m-5" aria-hidden="true"></i>Create new label</li></a>
                        </ul>
                    </div>
                </div>
                <div class="labels flex space-between">
                    <h4>Labels</h4>
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </div>
            </ul>
        </div>
    </div>
</body>
</html>