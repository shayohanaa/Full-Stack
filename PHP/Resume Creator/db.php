<?php
$conn = mysqli_connect('localhost', 'root', '123123', 'htmldb');

if(mysqli_connect_errno())
{
    echo 'DB Connection Failed..', mysqli_connect_error();
}