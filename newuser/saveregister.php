<?php
// Collecting form data
$email = filter_input(INPUT_POST, 'email');
$name = filter_input(INPUT_POST, 'name');
$phone = filter_input(INPUT_POST, 'phone');
$bg = filter_input(INPUT_POST, 'bg');
$city = filter_input(INPUT_POST, 'city');
$pincode = filter_input(INPUT_POST, 'pin');
$lat = $_POST["lat"];
$lon = $_POST["lon"];
$address = filter_input(INPUT_POST, 'address');

// Include the database connection file
require_once '../app/db.conn.php'; // Make sure $conn is defined in this file

try {
    // Prepare an SQL statement for execution
    $sql = "INSERT INTO donordetails (address, bg, city, email, name, phn, pin, lat, lon)
            VALUES (:address, :bg, :city, :email, :name, :phone, :pincode, :lat, :lon)";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':bg', $bg);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':pincode', $pincode);
    $stmt->bindParam(':lat', $lat);
    $stmt->bindParam(':lon', $lon);

    // Execute the prepared statement
    if ($stmt->execute()) {
        header("location: RS.php");
        exit();
    } else {
        include 'header.php';
        ?>
        <div class="u-clearfix u-sheet u-sheet-1" style="border:1px solid red; width:fit-content; border-radius:20px; padding-left:10px;padding-right:20px;background-color:red; color:white;">
            <p><?php echo "Error: Could not execute the query."; ?></p>
        </div>
        <?php
        include '../php/register.php';
    }
} catch (PDOException $e) {
    include 'header.php';
    ?>
    <div class="u-clearfix u-sheet u-sheet-1" style="border:1px solid red; width:fit-content; border-radius:20px; padding-left:10px;padding-right:20px;background-color:red; color:white;">
        <p><?php echo "Error: " . $e->getMessage(); ?></p>
    </div>
    <?php
    include '../php/register.php';
}

// Closing the connection is optional; PDO does this automatically when the script ends.
?>
