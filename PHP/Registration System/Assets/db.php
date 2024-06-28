<?php
// Connect to mySQL
$conn = mysqli_connect('localhost', 'root', '', 'DB');

// If connection failed
if(mysqli_connect_errno()){
    echo 'DB Connection failed...', mysqli_connect_error;
}
?>