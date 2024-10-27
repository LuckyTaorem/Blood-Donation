<?php 
  session_start();
  require '../includes/init.php';
  // IF USER MAKING LOGIN REQUEST
if(isset($_POST['email']) && isset($_POST['password'])){
  $result = $user_obj->loginUser($_POST['email'],$_POST['password']);
}
// IF USER ALREADY LOGGED IN
if(isset($_SESSION['email'])){
  header('Location: ../clientside/index.php');
  exit;
}
include 'header.php';
?>
<link rel="stylesheet" href="../css/login.css">
  <section class="u-clearfix u-section-1">
      
      <div class="u-clearfix u-sheet u-sheet-1">
        
        <div class="u-align-center u-container-style u-grey-10 u-group u-radius-50 u-shape-round u-group-1">
          
          <div class="u-container-layout u-container-layout-1">
              <span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1">    
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 45.532 45.532" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-862c"></use></svg><svg class="u-svg-content" viewBox="0 0 45.532 45.532" x="0px" y="0px" id="svg-862c" style="enable-background:new 0 0 45.532 45.532;"><g><path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765   S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53   c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012   c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592   c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path>
</g></svg></span>
            <h3 class="u-text u-text-default u-text-1">User Log In</h3>
            <div class="u-expanded-width u-form u-login-control u-form-1">
              <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-30 u-form-vertical u-inner-form" source="custom" name="form-3" style="padding: 10px;">
              <div class="u-form-group u-form-name">
              <div style="text-align:center; color:red;">
      <?php
        if(isset($result['errorMessage'])){
          echo '<p class="errorMsg">'.$result['errorMessage'].'</p>';
        }
        if(isset($result['successMessage'])){
          echo '<p class="successMsg">'.$result['successMessage'].'</p>';
        }
      ?>    
    </div>
                  <label for="username-5b0a" class="u-form-control-hidden u-label"></label>
                  <input type="email" placeholder="Enter your Email" id="username-5b0a" name="email" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-43 u-white">
                </div>
                <div class="u-form-group u-form-password">
                  <label for="password-5b0a" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Enter your Password" id="password-5b0a" name="password" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-43 u-white">
                </div>
                <div class="u-form-checkbox u-form-group">
                  <input type="checkbox" id="checkbox-5b0a" name="remember" value="On">
                  <label for="checkbox-5b0a" class="u-label">Remember me</label>
                </div>
                <div class="u-align-left u-form-group u-form-submit">
                  <a class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-50 u-btn-1">Login</a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
            <a href="signup.php" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-palette-1-base u-btn-3">New Here? Create an account.</a>
            <!-- <a href="login.php" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-palette-1-base u-btn-3">Forgot password?</a> -->
          </div>
        </div>
      </div>
    </section>
    <?php
include '../php/footer.php';
    ?>
</body>
</html>
