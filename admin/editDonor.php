<?php
include '../app/db.conn.php'; // Include database connection
include 'header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record by ID
    $query = $conn->prepare("SELECT * FROM donordetails WHERE email = ?");
    $query->execute([$id]);
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        echo "Record not found.";
        exit;
    }
}

// Update the record when the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bg = $_POST['bg'];
    $phn = $_POST['phn'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $address = $_POST['address'];

    $updateQuery = $conn->prepare("UPDATE donordetails SET name = ?,email=?, bg = ?, city = ?, phn=?, pin=?, address = ? WHERE email = ?");
    $updateQuery->execute([$name, $email, $bg, $city, $phn, $pin, $address, $id]);

    header("Location: donorDetails.php?info=updated"); // Redirect after update
    exit;
}
include 'sidebar.php';
?>

<div class="w3-container w3-card-4 w3-light-grey w3-margin w3-padding">
    <h2>Edit Record</h2>
    
    <form class="w3-container" method="POST">
        <label class="w3-text-blue"><b>Name</b></label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" class="w3-input w3-border"required>

        <label class="w3-text-blue"><b>Email</b></label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" class="w3-input w3-border"required>

        <label class="w3-text-blue"><b>Blood Group</b></label>
        <select name="bg" class="w3-select w3-border" required>
            <option value="" disabled>Select Blood Group</option>
            <option value="A+" <?php if($row['bg'] == 'A+') echo 'selected'; ?>>A+</option>
            <option value="A-" <?php if($row['bg'] == 'A-') echo 'selected'; ?>>A-</option>
            <option value="B+" <?php if($row['bg'] == 'B+') echo 'selected'; ?>>B+</option>
            <option value="B-" <?php if($row['bg'] == 'B-') echo 'selected'; ?>>B-</option>
            <option value="O+" <?php if($row['bg'] == 'O+') echo 'selected'; ?>>O+</option>
            <option value="O-" <?php if($row['bg'] == 'O-') echo 'selected'; ?>>O-</option>
            <option value="AB+" <?php if($row['bg'] == 'AB+') echo 'selected'; ?>>AB+</option>
            <option value="AB-" <?php if($row['bg'] == 'AB-') echo 'selected'; ?>>AB-</option>
        </select>
        <label class="w3-text-blue"><b>Phone Number</b></label>
        <input type="text" name="phn" value="<?php echo htmlspecialchars($row['phn']); ?>" class="w3-input w3-border" required>

        <label class="w3-text-blue"><b>City</b></label>
        <input type="text" name="city" value="<?php echo htmlspecialchars($row['city']); ?>" class="w3-input w3-border" required>

        <label class="w3-text-blue"><b>Pincode</b></label>
        <input type="text" name="pin" value="<?php echo htmlspecialchars($row['pin']); ?>" class="w3-input w3-border" required>

        <label class="w3-text-blue"><b>Address</b></label>
        <input type="text" name="address" value="<?php echo htmlspecialchars($row['address']); ?>" class="w3-input w3-border" required>

        <button type="submit" class="w3-button w3-blue w3-margin-top">Update</button>
        <a href="donorDetails.php" class="w3-button w3-red w3-margin-top">Cancel</a>
    </form>
</div>
