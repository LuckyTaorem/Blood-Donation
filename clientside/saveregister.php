<?php
include 'cHeader.php';

$email = filter_input(INPUT_POST,'email');
$name = filter_input(INPUT_POST,'name');
$phone = filter_input(INPUT_POST,'phone');
$bg = filter_input(INPUT_POST,'bg');
$city = filter_input(INPUT_POST,'city');
$pincode = filter_input(INPUT_POST,'pin');
$lat = $_POST["lat"];
$lon = $_POST["lon"];
$address = filter_input(INPUT_POST,'address');

if (!$conn) {
  die("Database Refused to connect!");
}
else{
  $sql = "INSERT INTO donordetails (address, bg, city, email, name, phn, pin, lat, lon) VALUES (:address, :bg, :city, :email, :name, :phone, :pin, :lat, :lon)";
  $stmt = $conn->prepare($sql);

  // Bind parameters
  $stmt->bindParam(':address', $address);
  $stmt->bindParam(':bg', $bg);
  $stmt->bindParam(':city', $city);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':phone', $phone);
  $stmt->bindParam(':pin', $pincode);
  $stmt->bindParam(':lat', $lat);
  $stmt->bindParam(':lon', $lon);
  $try_block = "";
  try {
    $stmt->execute();
    $try_block = "true";
  } catch (Exception $e) {
    $try_block = $e;
  }
  if ($try_block==="true") {
    echo "<script>window.location.replace('RS.php');</script>";
    exit();
} else {
      ?>
    <div class="u-clearfix u-sheet u-sheet-1" style="border:1px solid red; width:fit-content; border-radius:20px; padding-left:10px;padding-right:20px;background-color:red; color:white;">
        <p><?php echo "Error: ".$try_block->getMessage();?></p>
    </div>
        <?php
        include '../php/register.php';
    }
    $conn=null;
}
        ?>