<?php  

function getUser($email, $conn){
   $sql = "SELECT * FROM users 
           WHERE email=?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$email]);

   if ($stmt->rowCount() === 1) {
   	 $user = $stmt->fetch();
   	 return $user;
   }else {
   	$user = [];
   	return $user;
   }
}