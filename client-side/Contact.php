<?php
session_start();
if (isset($_SESSION['email'])) {
  require '../includes/init.php';
	# database connection file
  include '../app/db.conn.php';
  include '../app/helpers/user.php';
  # Getting User data data
  $user_data = $user_obj->find_user_by_id($_SESSION['email']);
  $all_users = $user_obj->all_users($_SESSION['email']);
  $user = getUser($_SESSION['email'], $conn);
  $get_req_num = $frnd_obj->request_notification($_SESSION['user_id'], false);
// TOTAL FRIENDS
$get_frnd_num = $frnd_obj->get_all_friends($_SESSION['user_id'], false);
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Blood Donation, Contact Us, Blood Donation">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/wholepage.css" media="screen">
<link rel="stylesheet" href="../css/Contact.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
<link rel="icon" href="../profile_images/<?=$user['p_p']?>">
<link rel="stylesheet" href="../css/sidemenu.css" media="screen">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/wholepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "../images/blood-drop.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">

  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-9789"><div class="u-clearfix u-sheet u-sheet-1">
    <a href="Contact.php" data-page-id="155010340" class="u-image u-logo u-image-1" data-image-width="600" data-image-height="761" title="Home">
      <img src="../images/blood-drop.jpg" class="u-logo-image u-logo-image-1">
    </a>
    <h1 class="u-custom-font u-font-lobster u-headline u-hidden-sm u-hidden-xs u-text u-text-1">
      <a href="/">Blood Donation</a>
    </h1>
    <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="LG">
      <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
        <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 8px 6px; font-size: calc(1em + 16px); color: rgb(17, 17, 17) !important;">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-499a"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 24 24" id="svg-499a"><g><path d="m21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.378 1.121-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.378-1.121 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5z"></path>
</g><g><path d="m16.5 8h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"></path>
</g><g><path d="m16.5 12.5h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"></path>
</g><g><path d="m16.5 17h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"></path>
</g></svg>
        </a>
      </div>
      <div class="u-custom-menu u-nav-container">
        <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="../index.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Register.php" style="padding: 10px 0px;">Register</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="About.php" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Contact.php" style="padding: 10px 0px;">Contact</a>
</li></ul>
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Register.php" style="padding: 10px 0px;">Register</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 0px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Account.php" style="padding: 10px 0px;">My Account</a>
</li></ul>
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav>
    <form action="php/search.php" method="get" class="u-border-1 u-border-grey-30 u-radius-25 u-search u-search-left u-white u-search-1">
      <button class="u-search-button" type="submit">
        <span class="u-search-icon u-spacing-10">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9cc9"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-9cc9" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
        </span>
      </button>
      <input class="u-search-input" type="search" name="search" value="" placeholder="Search Blood">
    </form>
    <div class="u-border-1 u-border-grey-50 u-enable-responsive u-hidden-xs u-image u-image-circle u-preserve-proportions u-image-2" onclick="openMenu()" alt="" data-image-width="1280" data-image-height="1280" style="background-image: url(../profile_images/<?=$user['p_p']?>);"></div>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;top:0;text-align: center;" id="menu">
      <button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
      <img src="../profile_images/<?=$user['p_p']?>" alt="Profile image">
        <br>
        <h6><?php echo  $user['name'];?></h6>
        <a href="../php/myprofile.php" rel="noopener noreferrer">My Profile</a>
        <a href="../php/profile.php" rel="noopener noreferrer">All users</a>
          <a href="../php/notifications.php" rel="noopener noreferrer">Requests<span class="badge <?php
                  if($get_req_num > 0){
                      echo 'redBadge';
                  }
                  ?>"><?php echo $get_req_num;?></span></a>
    <a href="../php/friends.php" rel="noopener noreferrer">Friends<span class="badge"><?php echo $get_frnd_num;?></span></a>
        <a href="../php/home.php" rel="noopener noreferrer">Messages</a>
        <a href="../php/game.php" rel="noopener noreferrer">Games</a>
    <a href="../php/logout.php" rel="noopener noreferrer" id="logout">Logout</a>
    </div>
    <script>
      function openMenu() {
      document.getElementById("menu").style.display = "block";
    }
    
    function closeMenu() {
      document.getElementById("menu").style.display = "none";
    }
    </script>
  </div></header>
    <section class="u-clearfix u-palette-2-base u-section-1" id="carousel_8a50">
      <div class="u-clearfix u-sheet u-valign-middle-md u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-2-light-1 u-group-1">
          <div class="u-container-layout u-valign-middle-xl u-valign-middle-xs u-container-layout-1">
            <h1 class="u-text u-text-1">Contact Us</h1>
            <div class="u-align-left u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
              <div class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form">
              <form action="https://formsubmit.co/luckytaorem5@gmail.com" method="POST" style="padding: 10px" source="custom" name="form"enctype="multipart/form-data">
                <div class="u-form-group u-form-name u-form-group-1">
                  <label for="name-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Name</label>
                  <input type="text" placeholder="Enter your Name" id="name-5a14" name="name" class="u-input u-input-rectangle u-white" required="">
                </div>
                <div class="u-form-email u-form-group u-form-group-2">
                  <label for="email-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Email</label>
                  <input type="email" placeholder="Enter a valid email address" id="email-5a14" name="email" class="u-input u-input-rectangle u-white" required="">
                </div>
                <div class="u-form-email u-form-group u-form-group-2">
                  <input type="file" placeholder="Show us what is the problem!" id="email-5a14" name="attachment" accept="image/png, image/jpeg" class="u-input u-input-rectangle u-white">
                  <font style="color: lightgray;">Choose an images (Optional)</font>
                </div>
                <div class="u-form-group u-form-message u-form-group-3">
                  <label for="message-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Message</label>
                  <textarea placeholder="Tell us the problem in details..." rows="4" cols="50" id="message-5a14" name="message" class="u-input u-input-rectangle u-white" required=""></textarea>
                </div>
                <div class="u-align-center u-form-group u-form-submit u-form-group-4">
                  <a href="#" class="u-active-white u-border-2 u-border-white u-btn u-btn-submit u-button-style u-hover-white u-none u-text-black u-text-hover-palette-2-base u-btn-1">Submit</a>
                  <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                </div>
                <input type="hidden" name="_next" value="https://minorproject.epizy.com/client-side/thankyou.php">
                <input type="hidden" name="_subject" value="Mail from MinorProject">
                <input type="hidden" name="_captcha" value="false">
                <!-- <input type="hidden" name="_cc" value="pushpendra391924@gmail.com,st.shubrat15@gmail.com"> -->
                <input type="text" name="_honey" style="display:none">
              </form>
            </div>
            </div>
          </div>
        </div>
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9f82"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-9f82" style="enable-background:new 0 0 512 512;"><g><g><path d="M507.49,101.721L352.211,256L507.49,410.279c2.807-5.867,4.51-12.353,4.51-19.279V121    C512,114.073,510.297,107.588,507.49,101.721z"></path>
</g>
</g><g><g><path d="M467,76H45c-6.927,0-13.412,1.703-19.279,4.51l198.463,197.463c17.548,17.548,46.084,17.548,63.632,0L486.279,80.51    C480.412,77.703,473.927,76,467,76z"></path>
</g>
</g><g><g><path d="M4.51,101.721C1.703,107.588,0,114.073,0,121v270c0,6.927,1.703,13.413,4.51,19.279L159.789,256L4.51,101.721z"></path>
</g>
</g><g><g><path d="M331,277.211l-21.973,21.973c-29.239,29.239-76.816,29.239-106.055,0L181,277.211L25.721,431.49    C31.588,434.297,38.073,436,45,436h422c6.927,0,13.412-1.703,19.279-4.51L331,277.211z"></path>
</g>
</g></svg></span>
                <h5 class="u-text u-text-2">Email</h5>
                <p class="u-text u-text-3">
                  <a href="mailto:luckytaorem5@gmail.com" class="u-active-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-2-base u-btn-2">luckytaorem5@gmail.com<br>
                  </a>
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 52 52" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-077e"></use></svg><svg class="u-svg-content" viewBox="0 0 52 52" x="0px" y="0px" id="svg-077e" style="enable-background:new 0 0 52 52;"><path style="fill:currentColor;" d="M38.853,5.324L38.853,5.324c-7.098-7.098-18.607-7.098-25.706,0h0
	C6.751,11.72,6.031,23.763,11.459,31L26,52l14.541-21C45.969,23.763,45.249,11.72,38.853,5.324z M26.177,24c-3.314,0-6-2.686-6-6
	s2.686-6,6-6s6,2.686,6,6S29.491,24,26.177,24z"></path></svg></span>
                <h5 class="u-text u-text-4">our main office</h5>
                <p class="u-text u-text-5">LPU, Phagwara</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 513.64 513.64" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9786"></use></svg><svg class="u-svg-content" viewBox="0 0 513.64 513.64" x="0px" y="0px" id="svg-9786" style="enable-background:new 0 0 513.64 513.64;"><g><g><path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72    c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68    c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44    l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"></path>
</g>
</g></svg></span>
                <h5 class="u-text u-text-6">phone number</h5>
                <p class="u-text u-text-7">+919362657944</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-d833"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="600" data-image-height="761">
          <img src="../images/blood-drop.png" class="u-logo-image u-logo-image-1">
        </a>
        <h1 class="u-custom-font u-font-lobster u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">Blood Donation</h1>
      </div></footer>
  </body>
</html>
<?php
  }else{
  	header("Location: ../php/index.php");
   	exit;
  }
 ?>