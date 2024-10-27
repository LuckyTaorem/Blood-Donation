<?php
    // Include the database connection file
    require_once '../app/db.conn.php';

    $bg = $_GET['search'] ?? '';

    // Validate input and redirect if empty
    if (empty($bg)) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }

    // Define valid blood groups
    $validBloodGroups = [
        'A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-',
        'a+', 'a-', 'b+', 'b-', 'o+', 'o-', 'ab+', 'ab-', 'Ab+', 'Ab-', 'aB+', 'aB-'
    ];

    // Check if blood group is valid
    if (!in_array($bg, $validBloodGroups)) {
        echo "<p style='text-align:center;font-size:30px;'>Enter the Correct Blood Group...</p>";
        exit;
    }

    // Prepare the SQL query with placeholders
    $stmt = $conn->prepare("SELECT * FROM donordetails WHERE bg LIKE :bg ORDER BY name ASC");
    $stmt->execute(['bg' => "%{$bg}%"]);

    // Check if any results were found
    if ($stmt->rowCount() > 0) {
?>

<form action="searchcity.php" method="get" id="searchcity">
    <input type="search" name="searchcity" placeholder="Search City">
    <input type="submit" value="Search">
</form>

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
        <?php
            // Fetch and display the results
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                    <td>" . ucwords(strtolower($row['name'])) . "</td>
                    <td><a href='mailto:{$row['email']}' target='_blank'>" . strtolower($row['email']) . "</a></td>
                    <td>" . strtoupper($row['bg']) . "</td>
                    <td>" . ucwords(strtolower($row['city'])) . "</td>
                    <td>{$row['address']}</td>
                    <td><a href='https://www.google.com/maps?q={$row['lat']},{$row['lon']}' target='_blank'><img src='../images/1216844.png' style='width:2vw;'></a></td>
                </tr>";
            }
        ?>
    </tbody>
</table>
<?php
    } else {
        echo "<p style='text-align:center;font-size:30px;'>No Users with " . strtoupper($bg) . " blood found</p>";
    }
?>
