<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?message=deleted");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>
