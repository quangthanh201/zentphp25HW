<?php
include 'connect.php';
$id = $_GET['id'];

$query = "DELETE FROM users WHERE users.id = ". $id;

$status = $conn->query($query);
if ($status) {
    header('Location:users.php');
} else {
    echo 'Delete failed!';
}