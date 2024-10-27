<?php  

session_start();

# check if the user is logged in
if (isset($_SESSION['email'])) {
	
	# database connection file
	include '../db.conn.php';

	# get the logged in user's username from SESSION
	$id = $_SESSION['user_id'];
$date = new \DateTime();
$date->setTimezone(new \DateTimeZone('+0530')); //GMT
$indiantime = $date->format('Y-m-d H:i:s');
	$sql = "UPDATE users
	        SET last_seen = $indiantime 
	        WHERE user_id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$id]);

}else {
	header("Location: ../../newuser/index.php");
	exit;
}