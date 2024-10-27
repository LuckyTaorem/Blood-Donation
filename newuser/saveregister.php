<?php
$email = filter_input(INPUT_POST,'email');
$name = filter_input(INPUT_POST,'name');
$phone = filter_input(INPUT_POST,'phone');
$bg = filter_input(INPUT_POST,'bg');
$city = filter_input(INPUT_POST,'city');
$pincode = filter_input(INPUT_POST,'pin');
$lat = $_POST["lat"];
$lon = $_POST["lon"];
$address = filter_input(INPUT_POST,'address');

$conn = new mysqli("sql308.epizy.com","epiz_30952003","4TeSyJ2b5LHde","epiz_30952003_majorproject");
if (mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')');
}
else{
    $sql = "INSERT INTO donordetails (address,bg,city,email,name,phn,pin,lat,lon)
    values('$address','$bg','$city','$email','$name','$phone','$pincode','$lat','$lon')";
    if ($conn->query($sql)){
      header("location:RS.php");
      exit();
    }
    else{
        include 'header.php';
        ?>
    <div class="u-clearfix u-sheet u-sheet-1" style="border:1px solid red; width:fit-content; border-radius:20px; padding-left:10px;padding-right:20px;background-color:red; color:white;">
        <p><?php echo "Error: ".$conn->error;?></p>
    </div>
        <?php
        include '../php/register.php';
    }
    $conn->close();
}

        ?>