<?php
include 'cHeader.php';

// Fetch donor details by email
$stmt = $conn->prepare("SELECT * FROM donordetails WHERE email = :email");
$stmt->bindParam(':email', $user['email']);
$stmt->execute();
$bg = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch blood group by email
$stmt2 = $conn->prepare("SELECT bg FROM donordetails WHERE email = :email");
$stmt2->bindParam(':email', $user['email']);
$stmt2->execute();
$bg2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$emailmp = $user['email'];
$grav_url_120 = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($emailmp))) . "?d=NotFound&s=120";
// Check if donor exists
if ($stmt->rowCount() > 0) {    ?>
    <div class="all_users">
        <div class="img" style="border-radius:0;">
            <?php
                if (imageExists($grav_url_120)) echo '<img src='.$grav_url_120.' alt="Profile image" style="border-radius:100%;border:1px solid black;width:150px; height:150px; margin-left:5%; float:left;">';
                else echo '<img src="../profile_images/' . $user_data->p_p . '" alt="Profile image" style="border-radius:100%;border:1px solid black;width:150px; height:150px; margin-left:5%; float:left;">';
            ?>
            <a href="https://en.gravatar.com/support/activating-your-account/" style="position:absolute;top:30%;left:22%;" class="btn btn-primary">Edit Picture</a>
            <p style="display:inline;margin-left:2%; font-size:30px; font-weight:bold;"><?php echo $user['name']; ?></p>
            <br>
            <p style="display:inline;margin-left:2%; font-size:30px;">Blood Group: <?php echo strtoupper($bg2['bg']); ?></p>
            <br>
            <p style="display:inline;margin-left:2%; font-size:30px;">Email: <a href="mailto:<?php echo $user['email']; ?>"><?php echo $user['email']; ?></a></p>
        </div>
        <center>
            <hr style="width:80%;border-top:1px solid black;">
        </center>

        <div style="width:45%;margin-left:5%;float:left;">
            <h3>LOCATION</h3>
            <hr style="width:80%;border-top:1px solid black;">
            <?php
            foreach ($bg as $row) {
                echo "<span style='font-size:22px;text-decoration:none;'>";
                echo "City<br>";
                echo "<strong>" . htmlspecialchars($row['city']) . "</strong>";
                echo "<br><br>Pincode / Zipcode<br>";
                echo "<strong>" . htmlspecialchars($row['pin']) . "</strong>";
                echo "<br><br>Address<br>";
                echo "<strong>" . htmlspecialchars($row['address']) . "</strong>";
                echo "</span>";
            }
            ?>
        </div>

        <div style="width:45%;margin-left:5%;float:left;">
            <h3>Contact Information</h3>
            <hr style="width:80%;border-top:1px solid black;">
            <?php
            // Display phone number for the first donor row
            if (!empty($row['phn'])) {
                echo "<span style='font-size:22px;text-decoration:none;'>";
                echo "Phone Number<br>";
                echo "<strong>" . htmlspecialchars($row['phn']) . "</strong>";
                echo "</span>";
            }
            ?>
        </div>
    </div>
<?php
} else {
    // If donor does not exist
    ?>
    <div class="all_users">
        <div class="img" style="border-radius:0;">
            <?php
                if (imageExists($grav_url_120)) echo '<img src='.$grav_url_120.' alt="Profile image" style="border-radius:100%;border:1px solid black;width:150px; height:150px; margin-left:5%; float:left;">';
                else echo '<img src="../profile_images/' . $user_data->p_p . '" alt="Profile image" style="border-radius:100%;border:1px solid black;width:150px; height:150px; margin-left:5%; float:left;">';
            ?>
            <p style="display:inline;margin-left:2%; font-size:30px; font-weight:bold;"><?php echo ucwords($user['name']); ?></p>
            <br>
            <p style="display:inline;margin-left:2%; font-size:30px;"><?php echo ucwords($user['name']) . " has not registered as a donor."; ?></p>
        </div>
    </div>
<?php
}
?>
</div>
</section>
</body>
</html>
