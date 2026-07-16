<?php

$conn = mysqli_connect("localhost", "root", "", "taskdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>