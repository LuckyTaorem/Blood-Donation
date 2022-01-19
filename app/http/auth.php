<?php  
session_start();

# check if username & password  submitted
if(isset($_POST['email']) &&
   isset($_POST['password'])){

   # database connection file
   include '../db.conn.php';
   
   # get data from POST request and store them in var
   $password = $_POST['password'];
   $email = $_POST['email'];
   
   #simple form Validation
   if(empty($email)){
      # error message
      $em = "Email is required";

      # redirect to 'index.php' and passing error message
      header("Location: ../../php/index.php?error=$em");
   }else if(empty($password)){
      # error message
      $em = "Password is required";

      # redirect to 'index.php' and passing error message
      header("Location: ../../php/index.php?error=$em");
   }else {
      $sql  = "SELECT * FROM 
               users WHERE email=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$email]);

      # if the username is exist
      if($stmt->rowCount() === 1){
        # fetching user data
        $user = $stmt->fetch();

        # if both username's are strictly equal
        if ($user['email'] === $email) {
           
           # verifying the encrypted password
          if (password_verify($password, $user['password'])) {

            # successfully logged in
            # creating the SESSION
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['user_id'] = $user['user_id'];

            # redirect to 'home.php'
            header("Location: ../../php/myprofile.php");

          }
        }
      }
            if ($user['email'] !== $email) {
        $em = "Incorrect email or password";
        $pass_verify=password_verify($password, $user['password']);
        if($pass_verify==false){

          # redirect to 'index.php' and passing error message
          header("Location: ../../php/index.php?error=$em");
      }
    }
                if ($user['email'] == $email) {
        $em = "Incorrect email or password";
        $pass_verify=password_verify($password, $user['password']);
        if($pass_verify==false){

          # redirect to 'index.php' and passing error message
          header("Location: ../../php/index.php?error=$em");
      }
    }
   }
}else {
  header("Location: ../../php/index.php");
  exit;
}