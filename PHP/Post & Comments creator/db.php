<?php
// Connect to mySQL
$conn = mysqli_connect('localhost', 'root', '', 'test');

// If connection failed
if(mysqli_connect_errno()){
    echo 'DB Connection failed...', mysqli_connect_error;
}
?>