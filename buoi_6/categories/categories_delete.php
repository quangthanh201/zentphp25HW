<?php
include 'connect.php';
$id = $_GET['id'];

$query = "DELETE FROM categories WHERE categories.id = ". $id;

$status = $conn->query($query);
if ($status) {
    header('Location:categories.php');
} else {
    echo 'Delete failed!';
}