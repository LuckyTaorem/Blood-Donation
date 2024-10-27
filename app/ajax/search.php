<?php
session_start();
# check if the user is logged in
if (isset($_SESSION['email'])) {
    # check if the key is submitted
    if(isset($_POST['key'])){
       # database connection file
	   include '../db.conn.php';

	   # creating simple search algorithm :) 
	   $key = "%{$_POST['key']}%";
     
	   $sql = "SELECT * FROM users
	           WHERE email
	           LIKE ? OR name LIKE ?";
       $stmt = $conn->prepare($sql);
       $stmt->execute([$key, $key]);

       if($stmt->rowCount() > 0){ 
         $users = $stmt->fetchAll();

         foreach ($users as $user) {
         	if ($user['email'] == $_SESSION['email']) continue;
       ?>
	   <style>
		   #userlist:hover{
			background-color:lightgray;
		   }
	   </style>
       <li class="list-group-item" id="userlist">
       <?php
			$emailse = $user['email'];
			$default = "https://img.icons8.com/plasticine/80/000000/test-account.png";
			$grav_url_80se = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $emailse ) ) ) . "?d=" . urlencode( $default ) . "&s=80";
		   ?>
		<a href="user_profile.php?id=<?=$user['user_id']?>"
		   class="d-flex
		          justify-content-between
		          align-items-center p-2">
			<div class="d-flex
			            align-items-center">

			    <img src="<?php echo $grav_url_80se;?>"
			         class="w-10 rounded-circle">

			    <h3 class="fs-xs m-2">
			    	<?=$user['name']?>
			    </h3>            	
			</div>
		 </a>
	   </li>
       <?php }} else { ?>
         <div class="alert alert-info 
    				 text-center">
		   <i class="fa fa-user-times d-block fs-big"></i>
           The user "<?=htmlspecialchars($_POST['key'])?>"
           is  not found.
		</div>
    <?php }
    }

}else {
	header("Location: ../../php/index.php");
	exit;
}