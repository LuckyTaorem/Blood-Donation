<?php 
  session_start();
  require '../includes/init.php';
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
    $result = $user_obj->singUpUser($_POST['name'],$_POST['email'],$_POST['password']);
  }
  if (!isset($_SESSION['email'])) {
      include 'header.php';
?>
<link rel="stylesheet" href="../css/signup.css">
  <section class="u-clearfix u-section-1" id="sec-437a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-3 u-border-palette-1-base u-container-style u-grey-10 u-group u-radius-50 u-shape-round u-group-2">
          <div class="u-container-layout u-container-layout-2"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 45.532 45.532" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1b6b"></use></svg><svg class="u-svg-content" viewBox="0 0 45.532 45.532" x="0px" y="0px" id="svg-1b6b" style="enable-background:new 0 0 45.532 45.532;"><g><path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765   S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53   c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012   c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592   c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path>
</g></svg></span>
            <h2 class="u-text u-text-default u-text-2">Create new account</h2>
            <div class="u-form u-form-1">
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
              <form action="" method="POST" novalidate source="custom" name="form" style="padding: 21px;">
              <div class="u-clearfix u-form-spacing-22 u-form-vertical u-inner-form">
                <div class="u-form-group u-form-name">
                  <label for="name-0a08" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Enter your Name" id="name-0a08" name="name" class="u-border-1 u-border-white u-input u-input-rectangle u-radius-50 u-white" required="">
                </div>
                <div class="u-form-group u-form-group-2">
                  <label for="email-0a08" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Enter your Email" id="email-0a08" name="email" class="u-border-1 u-border-white u-input u-input-rectangle u-radius-50 u-white" required="required">
                </div>
                <div class="u-form-group">
                  <label for="email-0a08" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Enter your password" id="email-0a08" name="password" class="u-border-1 u-border-white u-input u-input-rectangle u-radius-50 u-white" required="required">
                </div>
                <div class="u-form-agree u-form-group u-form-group-4">
                  <label for="agree-5ffd" class="u-label">By signing in you accepted our <a href="#">Terms of Service</a>
                  </label>
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="index.php" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-50">Submit</a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
        </div>
              </form>
            </div>
            <a href="index.php" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-2">Already has a account? Login Here</a>
          </div>
        </div>
      </div>
    </section>
    
    
<?php
include '../php/footer.php';
?>
</body>
</html>
<?php
  }else{
  	header("Location: index.php");
   	exit;
  }
 ?>