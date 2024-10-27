<?php
if (!empty($_FILES['file']['name'])) {
    // Where the file is going to be stored
    $target_dir = "../cv/";
    $file = $_FILES['file']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['file']['tmp_name'];
    $path_filename_ext = $target_dir . $filename . "." . $ext;
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$exp = $_POST['exp'];
$qua = $_POST['qua'];
$tel = $_POST['tel'];
$file = $filename . "." . $ext;

// Include the database connection file
require_once '../app/db.conn.php';

try {
    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO jhtml (fullname, email, address, city, zip, exp, qua, tel, cv)
            VALUES (:fullname, :email, :address, :city, :zip, :exp, :qua, :tel, :cv)";
    
    $stmt = $conn->prepare($sql);

    // Bind parameters to the prepared statement
    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':zip', $zip);
    $stmt->bindParam(':exp', $exp);
    $stmt->bindParam(':qua', $qua);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':cv', $file);

    // Execute the prepared statement
    $stmt->execute();
        // Move the uploaded file to the specified directory
        move_uploaded_file($temp_name, $path_filename_ext);
        include '../php/fileuploaded.php';
        exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
