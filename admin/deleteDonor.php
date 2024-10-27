<?php
include '../app/db.conn.php'; // Include database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record
    $deleteQuery = $conn->prepare("DELETE FROM donordetails WHERE email = ?");
    $deleteQuery->execute([$id]);

    header("Location: donorDetails.php?info=deleted"); // Redirect after delete
    exit;
} else {
    echo "Invalid request.";
}
?>
