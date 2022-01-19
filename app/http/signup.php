<?php  

# check if username, password, name submitted
if(isset($_POST['email']) &&
   isset($_POST['password']) &&
   isset($_POST['name'])){

   # database connection file
   include '../db.conn.php';
   
   # get data from POST request and store them in var
   $name = $_POST['name'];
   $password = $_POST['password'];
   $email = $_POST['email'];

   # making URL data format
   $data = 'name='.$name.'&email='.$email;

   #simple form Validation
   if (empty($name)) {
   	  # error message
   	  $em = "Name is required";

   	  # redirect to 'signup.php' and passing error message
   	  header("Location: ../../php/signup.php?error=$em");
   	  exit;
   }else if(empty($email)){
      # error message
   	  $em = "Email is required";

   	  /*
    	redirect to 'signup.php' and 
    	passing error message and data
      */
   	  header("Location: ../../php/signup.php?error=$em&$data");
   	  exit;
   }else if(empty($password)){
   	  # error message
   	  $em = "Password is required";

   	  /*
    	redirect to 'signup.php' and 
    	passing error message and data
      */
   	  header("Location: ../../php/signup.php?error=$em&$data");
   	  exit;
   }else {
   	  # checking the database if the username is taken
   	  $sql = "SELECT email 
   	          FROM users
   	          WHERE email=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$email]);

      if($stmt->rowCount() > 0){
      	$em = "The Email ($email) is already Registered";
      	header("Location: ../../php/signup.php?error=$em&$data");
   	    exit;
      }else {
      	# Profile Picture Uploading
      	if (isset($_FILES['pp'])) {
      		# get data and store them in var
      		$img_name  = $_FILES['pp']['name'];
      		$tmp_name  = $_FILES['pp']['tmp_name'];
      		$error  = $_FILES['pp']['error'];

      		# if there is not error occurred while uploading
      		if($error === 0){
               
               # get image extension store it in var
      		   $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

               /** 
				convert the image extension into lower case 
				and store it in var 
				**/
				$img_ex_lc = strtolower($img_ex);

				/** 
				crating array that stores allowed
				to upload image extension.
				**/
				$allowed_exs = array("jpg", "jpeg", "png");

				/** 
				check if the the image extension 
				is present in $allowed_exs array
				**/
				if (in_array($img_ex_lc, $allowed_exs)) {
					/** 
					 renaming the image with user's username
					 like: username.$img_ex_lc
					**/
					$new_img_name = $email. '.'.$img_ex_lc;

					# crating upload path on root directory
					$img_upload_path = '../../uploads/'.$new_img_name;

					# move uploaded image to ./upload folder
                    move_uploaded_file($tmp_name, $img_upload_path);
				}else {
					$em = "You can't upload files of this type";
			      	header("Location: ../../php/signup.php?error=$em&$data");
			   	    exit;
				}

      		}
      	}

      	// password hashing
      	$password = password_hash($password, PASSWORD_DEFAULT);

      	# if the user upload Profile Picture
      	if (isset($new_img_name)) {

      		# inserting data into database
            $sql = "INSERT INTO users
                    (name, email, password, p_p)
                    VALUES (?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$name, $email, $password, $new_img_name]);
      	}else {
            # inserting data into database
            $sql = "INSERT INTO users
                    (name, email, password)
                    VALUES (?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$name, $email, $password]);
      	}

      	# success message
      	$sm = "Account created successfully";

      	# redirect to 'index.php' and passing success message
      	header("Location: ../../php/index.php?success=$sm");
     	exit;
      }

   }
}else {
	header("Location: ../../php/signup.php");
   	exit;
}