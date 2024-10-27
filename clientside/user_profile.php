<?php
include 'cHeader.php';

if (isset($_GET['id'])) {
    $user_data = $user_obj->find_user_by_id($_GET['id']);
    if ($user_data === false || $user_data->user_id == $_SESSION['user_id']) {
        header('Location: profile.php');
        exit;
    }
}

// CHECK FRIENDS
$is_already_friends = $frnd_obj->is_already_friends($_SESSION['user_id'], $user_data->user_id);
//  IF I AM THE REQUEST SENDER
$check_req_sender = $frnd_obj->am_i_the_req_sender($_SESSION['user_id'], $user_data->user_id);
// IF I AM THE REQUEST RECEIVER
$check_req_receiver = $frnd_obj->am_i_the_req_receiver($_SESSION['user_id'], $user_data->user_id);

// Fetch donor details by email
$stmt = $conn->prepare("SELECT * FROM donordetails WHERE email = :email");
$stmt->bindParam(':email', $user_data->email);
$stmt->execute();
$bg = $stmt->fetch(PDO::FETCH_ASSOC);

// Fetch blood group by email
$stmt2 = $conn->prepare("SELECT bg FROM donordetails WHERE email = :email");
$stmt2->bindParam(':email', $user_data->email);
$stmt2->execute();
$bg2 = $stmt2->fetch(PDO::FETCH_ASSOC);

// Check if email exists
$stmt3 = $conn->prepare("SELECT email FROM donordetails WHERE email = :email");
$stmt3->bindParam(':email', $user_data->email);
$stmt3->execute();
?>

<div class="profile_container" style="margin-top:2%;">
    <?php
    if ($stmt3->rowCount() > 0) {
        ?>
        <div class="img" style="border-radius:0;">
            <?php
            $emailup = $user_data->email;
            $grav_url_120 = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($emailup))) . "?d=NotFound&s=120";
            if (imageExists($grav_url_120)) echo '<img src='.$grav_url_120.' alt="Profile image" style="border-radius:100%;border:1px solid black;width:150px; height:150px; margin-left:5%; float:left;">';
            else echo '<img src="" ?>" alt="Profile image" style="border-radius:100%;border:1px solid black;width:150px; height:150px; margin-left:5%; float:left;">'; 
            ?>
            <p style="display:inline;margin-left:2%; font-size:30px; font-weight:bold;"><?php echo $user_data->name ?></p>
            <br>
            <div class="inner_profile" style="float:right;margin-right:20%;">
                <div class="actions">
                    <?php
                    if ($is_already_friends) {
                        echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=unfriend_req&id=' . $user_data->user_id . '" class="req_actionBtn unfriend">Unfriend</a><span>';
                    } elseif ($check_req_sender) {
                        echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=cancel_req&id=' . $user_data->user_id . '" class="req_actionBtn cancleRequest">Cancel Request</a><span>';
                    } elseif ($check_req_receiver) {
                        echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=accept_req&id=' . $user_data->user_id . '" class="req_actionBtn acceptRequest">Accept</a>&nbsp;<a href="functions.php?action=ignore_req&id=' . $user_data->user_id . '" class="req_actionBtn ignoreRequest">Declined</a><span>';
                    } else {
                        echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=send_req&id=' . $user_data->user_id . '" class="req_actionBtn sendRequest">Send Friend Request</a><span>';
                    }
                    ?>
                </div>
            </div>
            <p style="display:inline;margin-left:2%; font-size:30px;">Blood Group : <?php echo isset($bg2['bg']) ? strtoupper($bg2['bg']) : 'N/A'; ?></p>
            <br>
            <p style="display:inline;margin-left:2%; font-size:30px;">Email : <a href="mailto:<?php echo $user_data->email ?>"><?php echo $user_data->email ?></a></p>
        </div>
        <center>
            <hr style="width:80%;border-top:1px solid black;">
        </center>

        <div style="width:45%;margin-left:5%;float:left;">
            <h3>LOCATION</h3>
            <hr style="width:80%;border-top:1px solid black;">
            <?php
            if ($bg) {
                echo "<span style='font-size:22px;text-decoration:none;'>";
                echo "City<br>";
                echo "<taorem style='font-weight:bold;'>" . $bg['city'] . "</taorem>";
                echo "<br><br>Pincode / Zipcode<br>";
                echo "<taorem style='font-weight:bold;'>" . $bg['pin'] . "</taorem>";
                echo "<br><br>Address<br>";
                echo "<taorem style='font-weight:bold;'>" . $bg['address'] . "</taorem>";
                echo "</span>";
            }
            ?>
        </div>
        <div style="width:45%;margin-left:5%; float:left;">
            <h3>Contact Information</h3>
            <hr style="width:80%;border-top:1px solid black;">
            <?php
            if ($bg) {
                echo "<span style='font-size:22px;text-decoration:none;'>";
                echo "Phone Number<br>";
                echo "<taorem style='font-weight:bold;'>" . $bg['phn'] . "</taorem>";
                echo "</span>";
            }
            ?>
        </div>
    <?php
    } else {
        ?>
        <div class="img" style="border-radius:0;">
            <?php
            $emailup2 = $user_data->email;
            $grav_url_120 = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($emailup2))) . "?d=NotFound&s=120";
            if (imageExists($grav_url_120)) echo '<img src='.$grav_url_120.' alt="Profile image" style="border-radius:100%;border:1px solid black;width:150px; height:150px; margin-left:5%; float:left;">';
            else echo '<img src="../profile_images/' . $user_data->p_p . '" alt="Profile image" style="border-radius:100%;border:1px solid black;width:150px; height:150px; margin-left:5%; float:left;">';
            ?>
            <p style="display:inline;margin-left:2%; font-size:30px; font-weight:bold;"><?php echo ucwords($user_data->name) ?></p>
            <br>
            <p style="display:inline;margin-left:2%; font-size:30px;"><?php echo ucwords($user_data->name) . " has not Registered as donor." ?></p>
            <div class="inner_profile" style="float:right;margin-right:20%;">
                <div class="actions">
                    <?php
                    if ($is_already_friends) {
                        echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=unfriend_req&id=' . $user_data->user_id . '" class="req_actionBtn unfriend">Unfriend</a><span>';
                    } elseif ($check_req_sender) {
                        echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=cancel_req&id=' . $user_data->user_id . '" class="req_actionBtn cancleRequest">Cancel Request</a><span>';
                    } elseif ($check_req_receiver) {
                        echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=accept_req&id=' . $user_data->user_id . '" class="req_actionBtn acceptRequest">Accept</a>&nbsp;<a href="functions.php?action=ignore_req&id=' . $user_data->user_id . '" class="req_actionBtn ignoreRequest">Declined</a><span>';
                    } else {
                        echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=send_req&id=' . $user_data->user_id . '" class="req_actionBtn sendRequest">Send Friend Request</a><span>';
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
</div>
</body>
</html>
