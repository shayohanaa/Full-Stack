
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
            <ul class="accgi">
                <!-- <li>Account created date: <strong><?php echo $day;?>-<?php echo $month;?>-<?php echo $year;?></strong></li>
                <li>Username: <strong><?php echo $row['username']; ?></strong></li>
                <li>Full name: <strong><?php echo $row['name']; ?></strong></li>
                <li>Email: <strong><?php echo $row['email']; ?></strong></li>
                <li>Delete account: <strong><a href="delAccount.php?delAcc=<?php echo $userId?>" style="color:#FF0000;">Delete Account</a></strong></li>
                <li id="delAccount">Delete account: <button style="color:#FF0000;">Delete Account</button></li> -->
                <li>
                    <h5>Account create date:<h5>
                    <span><strong><?php echo $day;?>-<?php echo $month;?>-<?php echo $year;?></strong></span>
                </li>
                <li>
                    <h5>Username:<h5>
                    <span><strong><?php echo $row['username']; ?></strong>
                        <i class="editaccrow fa fa-pencil" id="editaccrowusername" aria-hidden="true"></i>
                    </span>
                </li>
                <li>
                    <h5>Full name:<h5>
                    <span><strong><?php echo $row['name']; ?></strong>
                        <i class="editaccrow fa fa-pencil" id="editaccrowname" aria-hidden="true"></i>
                    </span>
                </li>
                <li>
                    <h5>Address:<h5>
                    <span><strong>Rambam 43</strong>
                        <i class="editaccrow fa fa-pencil" id="editaccrowaddress" aria-hidden="true"></i>
                    </span>
                </li>
                <li>
                    <h5>Email:<h5>
                    <span><strong><?php echo $row['email']; ?></strong>
                        <i class="editaccrow fa fa-pencil" id="editaccrowemail" aria-hidden="true"></i>
                    </span>
                </li>
                <li>
                    <h5>Company name:<h5>
                    <span><strong>Null</strong>
                        <i class="editaccrow fa fa-pencil" id="editaccrowcompany" aria-hidden="true"></i>
                    </span>
                </li>
                <li>
                    <h5>Phone number:<h5>
                    <span><strong>+972 52-5596789</strong>
                        <i class="editaccrow fa fa-pencil" id="editaccrowphone" aria-hidden="true"></i>
                    </span>
                </li>
            </ul>
            <?php endif; ?>
        </div>
        <!-- <div id="delAccountwarning" class="delAccountwarning none">
            <h1>Are you sure you want to delete this account?</h1>
            <hp>This account will be deleted permenantely!</hp>
            <div class="delBtns">
                <a href="delAccount.php?delAcc=<?php echo $row['id']; ?>" id="delAcc" style="color:#fff; background-color:#FF0000;">Delete Account</a>
                <button id="dontDel">Don't Delete</button>
            </div>
        </div> -->
    </div>
    <!-- <script src="assets/scripts/delAcc.js"></script> -->
</body>
</html>