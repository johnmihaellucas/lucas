<?php
include 'db.php';

$id = $_GET['id'];

// Delete the record
$sql = "DELETE FROM employees WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "Error deleting record.";
}
?>
