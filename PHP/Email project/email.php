<?php include 'config.php'; ?>
<?php
    $mailID = mysqli_real_escape_string($conn, $_GET['mailID']);
    $prevMailID = $mailID - 1;
    $nextMailID = $mailID + 1;

    $sql = "SELECT * FROM email WHERE id = '$mailID'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

    $sql2 = 'SELECT COUNT(*) AS total_mails FROM email'; 
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container bg-white black w-10 text-center absolute t-0 text-cap">
    <?php include 'sideBar.php'; ?>
        <div class="websiteContent grid">
            <?php include 'searchBar.php'; ?>
            <div class="mail">
                <!-- $row['COLUMN']; -->
                <div class="header bg-black5">
                    <div class="preVnexT text-left flex">
                        <div class="prev">
                            <a id="clickablePrev" href="email.php?mailID=<?php echo $prevMailID; ?>">
                                <i class="fa fa-chevron-left m-2" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="next">
                            <a id="clickableNext" href="email.php?mailID=<?php echo $nextMailID; ?>">
                                <i class="fa fa-chevron-right m-2" aria-hidden="true"></i>
                            </a>
                        </div>
                        <p class="b-8"><?php echo $mailID; ?> / 
                        <?php 
                        if ($row2) {
                            $totalMails = $row2['total_mails'];  // Access the total_mails value from the result
                            echo $totalMails;
                        } else {
                            echo "NULL";
                        }
                        ?>
                        </p>
                    </div>
                    <div class="icons">
                        <div class="icon">
                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </div>
                        <div class="icon">
                            <i class="fa fa-tag" aria-hidden="true"></i>
                        </div>
                        <div class="icon">
                            <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                        </div>
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="icon">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                        </div>
                        <div class="icon">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </div>
                        <div class="icon">
                            <i class="fa fa-flag-o" aria-hidden="true"></i>
                        </div>
                        <div class="icon">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                        </div>
                        <div class="icon">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="mail-content text-left bg-black5 w-10 h-10">
                    <div class="title bg-black4 m-5">
                        <h2 class="text-left"><?php echo $row['title'];?></h2>
                    </div>
                    <div class="content">
                        <h2 class="text-left"><?php echo $row['content'];?></h2>
                    </div>
                </div>
            </div>
        </div>
            <?php include 'iconsBar.php'; ?>
</div>

<script>
    const clickablePrev = document.getElementById('clickablePrev');
    clickablePrev.addEventListener('click', function(event) {
        const prevVal = parseInt(clickablePrev.getAttribute('href').split('=')[1]); // Extract mailID value
        if (prevVal == 0) {
            event.preventDefault(); // Prevent default behavior
            clickablePrev.classList.add('unclickable');
        } else {
            clickablePrev.classList.remove('unclickable');
        }
    });

    var Mails = parseInt(<?php echo json_encode($totalMails); ?>);
    const totalMails = Mails + 1;
    const clickableNext = document.getElementById('clickableNext');
    clickableNext.addEventListener('click', function(event) {
        const nextVal = parseInt(clickableNext.getAttribute('href').split('=')[1]); // Extract mailID value
        if (nextVal >= totalMails) {
            event.preventDefault(); // Prevent default behavior
            clickableNext.classList.add('unclickable');
        } else {
            clickableNext.classList.remove('unclickable');
        }
    });
</script>
</body>
</html>