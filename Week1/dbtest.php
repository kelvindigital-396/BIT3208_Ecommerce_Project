<?php

$conn = mysqli_connect("localhost","root","","week1db");

if(!$conn)
{
    die("Connection Failed");
}

$result = mysqli_query($conn,"SELECT * FROM test_connection");

echo "Database Connected Successfully";

?>