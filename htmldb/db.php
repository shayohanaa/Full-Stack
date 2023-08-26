<?php
// Connect to mySQL
$conn = mysqli_connect('localhost', 'root', '123123', 'htmldb');

// If connection failed
if(mysqli_connect_errno()){
    echo 'DB Connection failed...', mysqli_connect_error;
}
?>