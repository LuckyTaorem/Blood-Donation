<?php
// Include the database connection file
require_once '../app/db.conn.php';

$bg = $_SESSION['search'] ?? '';
$searchcity = $_GET['searchcity'] ?? '';

// Check if `searchcity` is empty, if so, redirect back
if (empty($searchcity)) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

// Prepare the SQL query with placeholders for blood group and city
$stmt = $conn->prepare("SELECT * FROM donordetails WHERE city LIKE :city AND bg LIKE :bg ORDER BY name ASC");
$stmt->execute([
    'city' => "%{$searchcity}%",
    'bg' => "%{$bg}%"
]);

// Fetch all matching records
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<form action="searchcity.php" method="get" id="searchcity">
    <input type="search" name="searchcity" placeholder="Search City">
    <input type="submit" value="Search">
</form>

<?php if (count($results) > 0) : ?>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Blood Group</th>
            <th>City</th>
            <th>Address</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $row) : ?>
            <tr>
                <td><?= ucwords(strtolower($row['name'])) ?></td>
                <td><a href="mailto:<?= strtolower($row['email']) ?>" target="_blank"><?= strtolower($row['email']) ?></a></td>
                <td><?= strtoupper($row['bg']) ?></td>
                <td><?= ucwords(strtolower($row['city'])) ?></td>
                <td><?= $row['address'] ?></td>
                <td>
                    <a href="https://www.google.com/maps?q=<?= $row['lat'] ?>,<?= $row['lon'] ?>" target="_blank">
                        <img src="../images/1216844.png" style="width:2vw;">
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else : ?>
    <p style='text-align:center;font-size:30px;'>No Users with <?= strtoupper($bg) ?> blood found in <?= htmlspecialchars($searchcity) ?></p>
<?php endif; ?>

</body>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</html>

<?php
// Close the database connection
$conn = null;
?>
