<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php
include 'header.php'; // Include the header file
require '../app/db.conn.php'; // Include the database connection file

try {
    // Check for connection errors
    if ($conn->errorInfo()[0] != '00000') {
        throw new Exception("Failed to connect to MySQL: " . implode(", ", $conn->errorInfo()));
    }

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("SELECT * FROM jcontent ORDER BY id ASC");
    $stmt->execute();

    // Fetch all records as an associative array
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    // Display error message and exit script if connection fails
    echo $e->getMessage();
    exit;
}
?>

<table class="table table-dark">
    <thead>
        <tr>
            <td colspan="10">
                <?php if (isset($_REQUEST['info']) && $_REQUEST['info'] == "delete") { ?>
                    <p class="alert alert-danger d-flex justify-content-center" role="alert">
                        Record has been deleted successfully!
                    </p>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td colspan="10" class="text-center">
                <h4>Content Writer Job Applicant</h4>
            </td>
        </tr>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Zip Code</th>
            <th scope="col">Experience</th>
            <th scope="col">Qualification</th>
            <th scope="col">Telephone</th>
            <th scope="col">CV or Resume</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php if (count($result) > 0) {
        foreach ($result as $row) { ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars(ucwords(strtolower($row['fullname']))) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['address']) ?></td>
                <td><?= htmlspecialchars(ucwords(strtolower($row['city']))) ?></td>
                <td><?= htmlspecialchars($row['zip']) ?></td>
                <td><?= htmlspecialchars($row['exp']) ?></td>
                <td><?= htmlspecialchars($row['qua']) ?></td>
                <td><?= htmlspecialchars($row['tel']) ?></td>
                <td>
                    <a href='../cv/<?= htmlspecialchars($row['cv']) ?>' download class='btn btn-primary'>Download</a>
                </td>
                <td>
                    <a href='logic.php?delcontent=<?= $row['id'] ?>' class='btn btn-danger'>Delete</a>
                </td>
            </tr>
        <?php }
    } else { ?>
        <tr>
            <td colspan="10" class="text-center">No records found.</td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php
// Close the PDO connection
$conn = null; // This automatically closes the connection when the script ends
?>
