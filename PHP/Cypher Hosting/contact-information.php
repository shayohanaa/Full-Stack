<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="generalsettings">
        <div class="Accdetails">
            <?php if($row = mysqli_fetch_assoc($sql)): ?>
            <?php 
                $createDate = $row['createDate']; 
                $date = new DateTime($createDate);
                $year = $date->format('Y');
                $month = $date->format('m');
                $day = $date->format('d');
                $hour = $date->format('H');
                $minute = $date->format('i');
                $second = $date->format('s');
            ?>
            <ul>
                <li>Account created date: <strong><?php echo $day;?>-<?php echo $month;?>-<?php echo $year;?></strong></li>
                <li>Username: <strong><?php echo $row['username']; ?></strong></li>
                <li>Full name: <strong><?php echo $row['name']; ?></strong></li>
                <li>Email: <strong><?php echo $row['email']; ?></strong></li>
                <!-- <li>Delete account: <strong><a href="delAccount.php?delAcc=<?php echo $userId?>" style="color:#FF0000;">Delete Account</a></strong></li> -->
                <li id="delAccount">Delete account: <button style="color:#FF0000;">Delete Account</button></li>
            </ul>
            <?php endif; ?>
        </div>
        <div id="delAccountwarning" class="delAccountwarning none">
            <h1>Are you sure you want to delete this account?</h1>
            <hp>This account will be deleted permenantely!</hp>
            <div class="delBtns">
                <a href="delAccount.php?delAcc=<?php echo $row['id']; ?>" id="delAcc" style="color:#fff; background-color:#FF0000;">Delete Account</a>
                <button id="dontDel">Don't Delete</button>
            </div>
        </div>
    </div>
    <script src="assets/scripts/delAcc.js"></script>
</body>
</html>