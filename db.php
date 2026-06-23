<?php

$conn = new mysqli("localhost", "root", "", "fbxxx_db");

if ($conn->connect_error) {
    die("Database connection failed");
}

?>