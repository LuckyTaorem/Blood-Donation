<?php 
session_start();
require("../app/db.conn.php");

try {
    // Retrieve and sanitize input data
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Prepare a statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = :username AND password = :password");

    // Bind parameters and execute the query
    $stmt->execute([
        ':username' => $username,
        ':password' => $password
    ]);

    // Fetch the result
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if user exists
    if ($user) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location:admin.php?info=success");
        exit();
    } else {
        header("location:index.php?info=fail");
        exit();
    }
} catch (PDOException $e) {
    // Handle any errors with connection or query
    die("Database error: " . $e->getMessage());
}
?>
