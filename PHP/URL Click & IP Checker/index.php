<?php include 'Assets/config.php'; ?>
<?php
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

if (isset($_GET['link_id']) && $_GET['link_id'] != '') {
    $link_id = mysqli_real_escape_string($conn, $_GET['link_id']);

    $ip = getUserIP();
    $checkifClicked = "SELECT * FROM clicked WHERE linkID = '$link_id' AND ip = '$ip'";
    $checkIP = mysqli_query($conn, $checkifClicked);

    if (mysqli_num_rows($checkIP) == 0) {
        $query = "SELECT * FROM linkclicks WHERE linkID = '$link_id'";
        $result = mysqli_query($conn, $query);

        if (!$result || mysqli_num_rows($result) == 0) {
            header('Location: index.php');
            exit;
        } else {
            $row = mysqli_fetch_assoc($result);
            $clicks = $row['clicks'];
            $clicks++;

            $update_query = "UPDATE linkclicks SET clicks = $clicks WHERE linkID = '$link_id'";
            if (mysqli_query($conn, $update_query)) {
                $insertIP = "INSERT INTO clicked (ip, linkID) VALUES('$ip', '$link_id')";
                mysqli_query($conn, $insertIP);
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    } else {
        header('Location: index.php'); 
        exit; 
    }
}
?>
