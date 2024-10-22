<?php
session_start();
if (isset($_SESSION['email'])) {
  require 'includes/init.php';
	# database connection file
  include 'app/db.conn.php';
  include 'app/helpers/user.php';
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
    <meta name="keywords" content="Blood Donation, Blood Donation">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="client-side/css/style.css" media="screen"/>
    <link rel="stylesheet" href="css/wholepage.css" media="screen">
    <link rel="stylesheet" href="css/sidemenu.css" media="screen">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/Home.css" media="screen">
<link rel="icon" href="../profile_images/<?=$user['p_p']?>"/>
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/wholepage.js" defer=""></script>
    <script type="text/javascript" src="js/bmi.js"></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/blood-drop.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <style>
      *{
        color:default;
      }
      .accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.activefaq, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.activefaq:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.bmi{
            font-family: sans-serif;
            text-align: center;
            background-color: wheat;
            width: 100%;
            padding:20px;
            position: relative;
          left: 50%;
          transform: translate(-50%, 0%);
        }
        .bmi h1{
            
        }
        .bmi input{
          background-color: wheat;
          border:none;
          border-bottom: 2px solid darkred;
            height: 30px;
            margin-top: 2vh;
            outline: none;
        }
        .bmi input::placeholder {
  color: darkred;
  opacity: 1;
}

        .bmi select{
            height: 30px;
            border:1px solid darkred;
            width: 70px;
            outline: none;
            background-color: wheat;
          border:none;
          border-bottom: 2px solid darkred;
        }
        .bmi button{
            margin-top: 3vh;
            font-size: 20px;
            height: fit-content;
            width: fit-content;
            padding: 1vh;
            background-color: rgb(110, 47, 57);
            color: white;
        }
        .bmi button:hover{
            background-color: rgb(170, 72, 88);
        }
        .bmi button:active{
            background-color: rgb(240, 15, 15);
        }
                .bmi #learnmore{
            font-size: 20px;
            height: fit-content;
            width: fit-content;
            padding: 10px;
            color: darkred;
            margin: auto;
            border: 1px solid darkred;
            border-radius: 25px;
            background-color: rgba(255, 255, 255 ,0.5);
        }
        .bmi #learnmore:hover{
            background-color: rgba(0,0,0,0.2);
        }
        .bmi #learnmore:active{
            background-color: rgba(80,80,80,0.5);
        }
        #rweight{
          margin-left: 32%;
          margin-right: 32%;
          border-radius: 20px;
        }
        #normal{
          color:rgb(0, 50, 0);
        }
        #rresult{
          font-size: 20px;
        }
        @media screen and (max-width: 600px) {
          #fronttext{
          width: 98%;
        }
        #rweight{
          margin-left: 2%;
          margin-right: 2%;
        }
}
    </style>
  </head>
  <body data-home-page="html/index.html" data-home-page-title="Home" class="u-body u-overlap u-overlap-transparent"><header class="u-clearfix u-header u-header" id="sec-9789"><div class="u-clearfix u-sheet u-sheet-1">
    <a href="index.php" data-page-id="155010340" class="u-image u-logo u-image-1" data-image-width="600" data-image-height="761" title="Home">
      <img src="images/blood-drop.jpg" class="u-logo-image u-logo-image-1">
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
        <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="client-side/index.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="client-side/Register.php" style="padding: 10px 0px;">Register</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="client-side/About.php" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="client-side/Contact.php" style="padding: 10px 0px;">Contact</a>
</li></ul>
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="client-side/Register.php" style="padding: 10px 0px;">Register</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="client-side/About.php" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="client-side/Contact.php" style="padding: 10px 0px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="client-side/Account.php" style="padding: 10px 0px;">My Account</a>
</li></ul>
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav>
    <form action="client-side/php/search.php" method="get" class="u-border-1 u-border-grey-30 u-radius-25 u-search u-search-left u-white u-search-1">
      <button class="u-search-button" type="submit">
        <span class="u-search-icon u-spacing-10">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9cc9"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-9cc9" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
        </span>
      </button>
      <input class="u-search-input" type="search" name="search" value="" placeholder="Search Blood">
    </form>
    <div class="u-border-1 u-border-grey-50 u-enable-responsive u-hidden-xs u-image u-image-circle u-preserve-proportions u-image-2" onclick="openMenu()" alt="" data-image-width="1280" data-image-height="1280" style="background-image: url(profile_images/<?=$user['p_p']?>);"></div>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;top:0;text-align: center;" id="menu">
      <button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
      <img src="profile_images/<?=$user['p_p']?>" alt="Profile image">
        <br>
        <h6><?php echo  $user['name'];?></h6>
        <a href="php/myprofile.php" rel="noopener noreferrer">My Profile</a>
        <a href="php/profile.php" rel="noopener noreferrer">All users</a>
          <a href="php/notifications.php" rel="noopener noreferrer">Requests<span class="badge <?php
                  if($get_req_num > 0){
                      echo 'redBadge';
                  }
                  ?>"><?php echo $get_req_num;?></span></a>
    <a href="php/friends.php" rel="noopener noreferrer">Friends<span class="badge"><?php echo $get_frnd_num;?></span></a>
        <a href="php/home.php" rel="noopener noreferrer">Messages</a>
    <a href="php/game.php" rel="noopener noreferrer">Games</a>
    <a href="php/logout.php" rel="noopener noreferrer" id="logout">Logout</a>
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
    <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_3405">
      <h1 class="u-align-center u-text u-title u-text-1">
        <span class="u-text-custom-color-1">Blood Donation</span>
      </h1>
      <p class="u-align-center u-text u-text-2" id="fronttext"> Blood Donation enforces Drug &amp; Cosmetic Act, National blood policy standards and guidelines ensuring proper collection &amp; donation, effective management and monitoring the quality and quantity of the donated blood.&nbsp; </p>
      <div class="u-expanded-width u-palette-2-base u-shape u-shape-rectangle u-shape-1"></div>
      <img src="images/blood_donation.jpg" alt="" class="u-image u-image-default u-image-1" data-image-width="1024" data-image-height="683">
      <div class="u-layout-grid u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-circle u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e6c8"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-e6c8"><g><g><path d="m252 72h-20v-8a40 40 0 0 0 -40-40h-32a40 40 0 0 0 -40 40v8h-20a52.059 52.059 0 0 0 -52 52v222.377a61.925 61.925 0 0 0 42.394 58.823l5.606 1.865v48.935h32v-38.269l6.257 2.085a131.84 131.84 0 0 0 25.743 5.804v62.38h32v-62.38a131.811 131.811 0 0 0 25.742-5.8l6.258-2.089v38.269h32v-48.936l5.607-1.869a61.923 61.923 0 0 0 42.393-58.818v-222.377a52.059 52.059 0 0 0 -52-52z" fill="#ffefed"></path><path d="m251.487 374.838-43.864 14.621a100 100 0 0 1 -63.246 0l-43.864-14.621a30 30 0 0 1 -20.513-28.461v-222.377a20 20 0 0 1 20-20h152a20 20 0 0 1 20 20v222.377a30 30 0 0 1 -20.513 28.461z" fill="#e64b30"></path><path d="m80 160h192v160h-192z" fill="#fef8f7"></path><path d="m192 224h-24v-24h-32v24h-24v32h24v24h32v-24h24z" fill="#e64b30"></path>
</g><g><path d="m448.007 152.827c-21.323-22.436-55.895-22.436-77.219 0l-26.794 28.191-26.8-28.191c-21.323-22.436-55.9-22.436-77.219 0-21.323 22.435-21.323 58.81 0 81.245l104.019 109.438 104.013-109.438c21.324-22.435 21.324-58.81 0-81.245z" fill="#fdbf44"></path><g><path d="m56 124a44.049 44.049 0 0 1 44-44h152a44.18 44.18 0 0 1 43.871 40.609l15.953-1.218a60.252 60.252 0 0 0 -59.824-55.391h-12a48.055 48.055 0 0 0 -48-48h-32a48.055 48.055 0 0 0 -48 48h-12a60.068 60.068 0 0 0 -60 60v60h16zm104-92h32a32.036 32.036 0 0 1 32 32h-96a32.036 32.036 0 0 1 32-32z"></path><path d="m160 40h32v16h-32z"></path><path d="m200 224a8 8 0 0 0 -8-8h-16v-16a8 8 0 0 0 -8-8h-32a8 8 0 0 0 -8 8v16h-16a8 8 0 0 0 -8 8v32a8 8 0 0 0 8 8h16v16a8 8 0 0 0 8 8h32a8 8 0 0 0 8-8v-16h16a8 8 0 0 0 8-8zm-16 24h-16a8 8 0 0 0 -8 8v16h-16v-16a8 8 0 0 0 -8-8h-16v-16h16a8 8 0 0 0 8-8v-16h16v16a8 8 0 0 0 8 8h16z"></path><path d="m200 280h48v16h-48z"></path><path d="m453.806 147.314a60.846 60.846 0 0 0 -44.406-19.314 60.853 60.853 0 0 0 -44.409 19.314l-20.995 22.092-21-22.092a60.876 60.876 0 0 0 -43-19.3v-4.014a28.032 28.032 0 0 0 -28-28h-151.996a28.032 28.032 0 0 0 -28 28v222.377a37.955 37.955 0 0 0 25.983 36.051l43.864 14.621a108.673 108.673 0 0 0 68.3 0l43.865-14.621a37.955 37.955 0 0 0 25.988-36.051v-58.585l56 58.92v131.288a2 2 0 0 1 -2 2h-84a2 2 0 0 1 -2-2v-14h8a8 8 0 0 0 8-8v-43.17l.138-.045a69.912 69.912 0 0 0 47.862-66.408v-10.377h-16v10.377a53.931 53.931 0 0 1 -36.922 51.228l-5.608 1.87a8 8 0 0 0 -5.47 7.589v40.936h-16v-30.269a8 8 0 0 0 -10.53-7.589l-6.258 2.086a124.226 124.226 0 0 1 -24.181 5.451 8 8 0 0 0 -7.031 7.941v54.38h-16v-54.38a8 8 0 0 0 -7.031-7.941 124.133 124.133 0 0 1 -24.182-5.452l-6.257-2.086a8 8 0 0 0 -10.53 7.589v30.27h-16v-40.936a8 8 0 0 0 -5.471-7.589l-5.6-1.868a53.935 53.935 0 0 1 -36.929-51.23v-146.377h-16v146.377a69.914 69.914 0 0 0 47.865 66.409l.135.045v43.169a8 8 0 0 0 8 8h32a8 8 0 0 0 8-8v-27.245a140.741 140.741 0 0 0 16 3.766v55.479a8 8 0 0 0 8 8h32a8 8 0 0 0 8-8v-55.479a140.792 140.792 0 0 0 16-3.766v27.245a8 8 0 0 0 8 8h8v14a18.021 18.021 0 0 0 18 18h84a18.021 18.021 0 0 0 18-18v-131.3l69.8-73.438-11.6-11.024-66.206 69.662-98.215-103.339c-18.4-19.361-18.4-50.863 0-70.223a44.71 44.71 0 0 1 65.621 0l26.8 28.192a8 8 0 0 0 11.6 0l26.8-28.192a44.71 44.71 0 0 1 65.621 0c18.4 19.36 18.4 50.862 0 70.223l-20.84 21.927 11.6 11.024 20.841-21.928c24.162-25.439 24.162-66.831-.016-92.27zm-189.806 199.063a21.972 21.972 0 0 1 -15.043 20.871l-43.865 14.621a92.546 92.546 0 0 1 -58.185 0l-43.864-14.621a21.972 21.972 0 0 1 -15.043-20.871v-18.377h176zm-29.819-106.793 29.819 31.374v41.042h-176v-144h132.93c-9.53 23.746-5.11 52.265 13.251 71.584zm29.819-109.809a61.537 61.537 0 0 0 -29.819 17.539q-2.15 2.264-4.044 4.686h-142.137v-28a12.013 12.013 0 0 1 12-12h152a12.013 12.013 0 0 1 12 12z"></path><path d="m368.572 229.029-10.144 25.361-31.644-50.63a8 8 0 0 0 -13.939.662l-13.789 27.578h-19.056v16h24a8 8 0 0 0 7.155-4.422l9.621-19.242 32.44 51.9a8 8 0 0 0 6.784 3.764c.237 0 .475-.011.713-.031a8 8 0 0 0 6.717-5l13.987-34.969h34.583v-16h-40a8 8 0 0 0 -7.428 5.029z"></path>
</g>
</g>
</g></svg></span>
              <h4 class="u-text u-text-3">Blood Donate</h4>
              <p class="u-text u-text-4">Donating blood help in reducing the risk of damage to liver and pancreas</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-video-cover">
            <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 510 510" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5c8f"></use></svg><svg class="u-svg-content" viewBox="0 0 510 510" id="svg-5c8f"><g><path d="m492.5 300c0 66.17-53.83 120-120 120v-357.94l93.5 146.92c17.33 27.25 26.5 58.72 26.5 91.02z" fill="#c40048"></path><path d="m372.5 62.06v357.94c-66.17 0-120-53.83-120-120 0-32.3 9.17-63.77 26.5-91.02z" fill="#ff4a4a"></path><path d="m197.5 75v90l-74.7 19.58-.3-.08-15-109.5z" fill="#c40048"></path><path d="m122.5 75v109.5l-75-19.5v-90z" fill="#ff4a4a"></path><path d="m197.5 345v90c0 41.36-33.65 75-75 75l-15-179.44 17.92-.56z" fill="#c40048"></path><path d="m122.5 330.56v179.44c-41.35 0-75-33.64-75-75v-90z" fill="#ff4a4a"></path><path d="m122.803 345h-75.303v-180h75.303l14.697 91z" fill="#f7f9fa"></path><path d="m122.803 165h75.303v180h-75.303z" fill="#dceaec"></path><path d="m122.803 240h-75.303v-30h75.303l4.235 15z" fill="#00eecf"></path><path d="m47.5 270h60v30h-60z" fill="#00eecf"></path><path d="m417.5 280v30h-30v30h-15v-90h15v30z" fill="#dceaec"></path><path d="m372.5 250v90h-15v-30h-30v-30h30v-30z" fill="#f7f9fa"></path><path d="m17.5 0h70v90h-70z" fill="#0a789b"></path><path d="m87.5 0h35.303v90h-35.303z" fill="#0a617d"></path><path d="m122.5 0h35.303v90h-35.303z" fill="#08475e"></path><path d="m157.5 0h70v90h-70z" fill="#05303d"></path><path d="m122.803 210h14.697v30h-14.697z" fill="#00b5bc"></path>
</g></svg></span>
              <h4 class="u-text u-text-5">BLood stored</h4>
              <p class="u-text u-text-6"> Blood must always be stored at a temperature&nbsp;between +2 degree C to +6 degree C&nbsp;in a blood bank refrigerator</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-video-cover">
            <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7024"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-7024" style="enable-background:new 0 0 512 512;"><path style="fill:#FFCDA8;" d="M512,256c0,3.594-0.073,7.158-0.23,10.71c-0.324,8.067-1.024,16.029-2.1,23.876  c-2.487,18.463-6.949,36.31-13.155,53.311c-5.945,16.269-13.5,31.754-22.465,46.289c-15.067,24.44-34.137,46.153-56.289,64.23  c-7.398,6.05-15.13,11.682-23.186,16.865c-12.716,8.202-26.206,15.308-40.343,21.18c-5.925,2.466-11.954,4.713-18.087,6.729  C310.941,507.507,283.993,512,256,512c-48.421,0-93.686-13.437-132.295-36.801c-15.809-9.55-30.501-20.773-43.833-33.426  c-5.726-5.423-11.201-11.118-16.405-17.053c-15.757-17.951-29.027-38.139-39.309-60.008C8.662,331.713,0,294.87,0,256  C0,114.615,114.615,0,256,0c120.174,0,220.996,82.798,248.55,194.456c0.324,1.296,0.637,2.591,0.94,3.897  C509.743,216.879,512,236.178,512,256z"></path><path style="fill:#FF5B47;" d="M494.762,78.751c5.902,41.124-44.877,82.433-113.421,92.27c-23.872,3.426-46.752,2.582-66.674-1.706  l-0.011-0.008c-37.297-8.033-64.27-28.135-68.116-54.933c-5.902-41.124,44.887-82.445,113.43-92.281S488.861,37.627,494.762,78.751z  "></path><g><path style="fill:#E53E2D;" d="M370.371,94.589c-37.455,5.375-71.116-5.528-82.9-25.098c-1.056,4.019-1.344,8.109-0.757,12.197   c3.812,26.561,42.788,42.943,87.056,36.59c44.268-6.353,77.064-33.034,73.253-59.596c-0.586-4.088-2.012-7.932-4.157-11.492   C437.063,69.286,407.827,89.214,370.371,94.589z"></path><path style="fill:#E53E2D;" d="M320.577,91.766l-3.646,21.308c0,0-36.033,30.928-2.276,56.231   c-37.297-8.033-64.27-28.135-68.116-54.933c-5.902-41.124,44.887-82.445,113.43-92.281   C359.969,22.091,294.543,64.162,320.577,91.766z"></path>
</g><path style="fill:#FF5B47;" d="M512,256c0,3.594-0.073,7.158-0.23,10.71c-0.324,8.067-1.024,16.029-2.1,23.876  c-2.487,18.463-6.949,36.31-13.155,53.311c-10.083-0.439-19.738-1.682-28.776-3.626h-0.01  c-37.303-8.035-64.272-28.139-68.117-54.941c-5.653-39.403,40.741-78.994,104.939-90.875c0.324,1.296,0.637,2.591,0.94,3.897  C509.743,216.879,512,236.178,512,256z"></path><g><path style="fill:#E53E2D;" d="M511.77,266.71c-0.324,8.067-1.024,16.029-2.1,23.876c-14.775,0.209-28.411-2.152-39.675-6.552   c-16.771-6.541-28.233-17.586-30.208-31.389c-0.596-4.086-0.303-8.171,0.752-12.194c6.06,10.073,17.92,17.847,33.102,22.288   C484.864,266.021,497.904,267.483,511.77,266.71z"></path><path style="fill:#E53E2D;" d="M473.642,262.729v0.01l-3.647,21.295c0,0-36.028,30.929-2.267,56.236   c-37.303-8.035-64.272-28.139-68.117-54.941c-5.653-39.403,40.741-78.994,104.939-90.875c0.324,1.296,0.637,2.591,0.94,3.897   C489.085,210.516,453.224,241.068,473.642,262.729z"></path>
</g><path style="fill:#FF5B47;" d="M315.706,394.037c-26.514,31.984-91.222,22.086-144.53-22.107  c-18.566-15.391-33.302-32.914-43.5-50.557l-0.001-0.015c-19.087-33.033-22.3-66.52-5.021-87.363  c26.514-31.984,91.236-22.088,144.545,22.106S342.221,362.053,315.706,394.037z"></path><g><path style="fill:#E53E2D;" d="M220.454,312.485c-29.131-24.15-43.65-56.415-37.058-78.288c-3.687,1.915-6.912,4.449-9.547,7.628   c-17.125,20.658-3.097,60.541,31.332,89.084s76.222,34.933,93.348,14.275c2.635-3.18,4.528-6.817,5.726-10.796   C283.981,344.921,249.584,336.634,220.454,312.485z"></path><path style="fill:#E53E2D;" d="M189.113,273.687l-18.239,11.605c0,0-47.113-5.939-43.2,36.067   c-19.087-33.033-22.3-66.52-5.021-87.363c26.514-31.984,91.236-22.088,144.545,22.106   C267.198,256.101,192.092,235.859,189.113,273.687z"></path>
</g><path style="fill:#FF5B47;" d="M252.35,193.018c-9.337,40.482-71.602,60.682-139.076,45.12c-23.5-5.42-44.533-14.465-61.565-25.652  l-0.008-0.013C19.816,191.521,1.915,163.04,8,136.659c9.337-40.482,71.614-60.69,139.088-45.127S261.687,152.535,252.35,193.018z"></path><g><path style="fill:#E53E2D;" d="M130.627,162.897c-36.87-8.504-64.328-30.819-68.256-53.324c-2.436,3.367-4.18,7.078-5.107,11.102   c-6.031,26.146,24.407,55.49,67.984,65.541s83.792-2.997,89.824-29.143c0.928-4.024,0.985-8.124,0.272-12.218   C201.955,163.367,167.497,171.402,130.627,162.897z"></path><path style="fill:#E53E2D;" d="M85.206,142.294l-11.09,18.557c0,0-44.767,15.84-22.415,51.621   C19.818,191.521,1.916,163.04,8.001,136.659c9.337-40.482,71.614-60.69,139.088-45.127   C147.088,91.531,70.888,107.155,85.206,142.294z"></path>
</g><path style="fill:#FF5B47;" d="M474.049,390.186c-15.067,24.44-34.137,46.153-56.289,64.23c-7.398,6.05-15.13,11.682-23.186,16.865  c-18.045,11.64-37.648,21.076-58.431,27.909c-18.025-15.172-28.014-33.688-26.07-52.642c4.221-41.336,63.509-69.13,132.389-62.088  C453.465,385.588,464.05,387.532,474.049,390.186z"></path><g><path style="fill:#E53E2D;" d="M417.761,454.416c-7.398,6.05-15.13,11.682-23.186,16.865   c-24.158-10.762-39.487-28.421-37.606-46.728c0.418-4.106,1.682-8.004,3.678-11.651   C366.279,431.282,388.441,447.467,417.761,454.416z"></path><path style="fill:#E53E2D;" d="M387.375,442.525l-8.694,19.801c0,0-22.559,11.316-24.451,30.135   c-5.925,2.466-11.954,4.712-18.087,6.729c-18.025-15.172-28.014-33.688-26.07-52.642c4.221-41.336,63.509-69.13,132.389-62.088   C442.462,384.46,368.797,409.443,387.375,442.525z"></path>
</g><path style="fill:#FF5B47;" d="M123.705,475.199c-15.809-9.55-30.501-20.773-43.833-33.426  c-5.726-5.423-11.201-11.118-16.405-17.053c-15.757-17.951-29.027-38.139-39.309-60.008c58.535-24.68,117.164-17.795,134.426,17.209  C171.948,409.025,156.839,445.524,123.705,475.199z"></path><path style="fill:#E53E2D;" d="M79.872,441.772c-5.726-5.423-11.201-11.118-16.405-17.053c23.218-16.52,37.073-38.306,35.997-56.696  c3.145,2.717,5.684,5.925,7.513,9.634C116.203,396.361,104.417,422.003,79.872,441.772z"></path></svg></span>
              <h4 class="u-text u-text-7">RED BLOOD cells</h4>
              <p class="u-text u-text-8"> Red blood cells carry&nbsp;oxygen from our lungs&nbsp;to the rest of our bodies</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bmi">
      <h1>BMI CALCULATOR</h1>
    <input type="numeric" name="weight" placeholder="Enter your Weight: " id="weight" required="required"><font style="font-size: 20px; margin:10px">in</font>
    <select id="sweight"><option value="Kg">Kg</option><option value="Pound">Pound</option></select>
    <br><input type="numeric" name="height" placeholder="Enter your Height:" id="height" required="required"><font style="font-size: 20px; margin:10px">in</font>
    <select id="sheight"><option value="Feet">Feet</option><option value="cm">cm</option></select>
    <br><button onclick="run()">Submit</button>
    <div id="rweight" style="font-size: 30px; color: white; margin-bottom: 10px;"><span id="normal"></span><br><span id="nweight"></span><span id="nweight2"></span></div>
    <div id="learnmore" onclick="window.open('BMIlearnmore.html','_blank'); return false;">Learn More</div>
    <div style="text-align: left;left: 50%;
    transform: translate(-50%, 0%); width: fit-content;">
    <h2 id="rtitle" style="text-align: center;"></h2>
    <h1 id="output"></h1>
  </div>
  <div style="text-align: left;left: 50%;
    transform: translate(-50%, 0%); width: fit-content;">
    <p id="rresult"></p>
    </div>
    </section>

    <section style="border:2px solid black; padding-top: 2%;padding-bottom: 2%;">
      <h2 style="text-align: center; text-transform: uppercase; margin: 0; padding-bottom: 2%;">FAQ</h2>
      <button class="accordion">How does the blood donation process work?</button>
<div class="panel">
  <p>Donating blood is a simple thing to do, but can make a big difference in the lives of others.<br><br>
    <font style="font-weight: bold;">Registration:</font><br>&nbsp;&nbsp;
    You will complete donor registration, which includes information such as your name, address, phone number, and donor identification number (if you have one).<br><br>
    <font style="font-weight: bold;">Health History and Mini Physical:</font><br>&nbsp;&nbsp;
    1. You will answer some questions during a private and confidential interview about your health history and the places you have traveled.<br>&nbsp;&nbsp;
    2. You will have your temperature, hemoglobin, blood pressure and pulse checked.
    <br><br>
    <font style="font-weight: bold;">Donation:</font><br>&nbsp;&nbsp;
    1. We will cleanse an area on your arm and insert a brand–new, sterile needle for the blood draw. This feels like a quick pinch and is over in seconds.<br>&nbsp;&nbsp;
2. You will have some time to relax while the bag is filling. (For a whole blood donation, it is about 8-10 minutes. If you are donating platelets, red cells or plasma by apheresis the collection can take up to 2 hours.)<br>&nbsp;&nbsp;
3. When approximately a pint of blood has been collected, the donation is complete and a staff person will place a bandage on your arm. 
  </p>
  <font style="font-weight: bold;">Refreshments:</font><br>&nbsp;&nbsp;
  1. You will spend a few minutes enjoying refreshments to allow your body time to adjust to the slight decrease in fluid volume.<br>&nbsp;&nbsp;
2. After 10-15 minutes you can then leave the donation site and continue with your normal daily activities.<br>&nbsp;&nbsp;
3. Enjoy the feeling of accomplishment knowing that you have helped to save lives.
</div>

<button class="accordion">What should I do after donating blood?</button>
<div class="panel">
  <p>
    After you give blood:<br><br>
    <font style="font-weight: bold;">Take the following precautions:</font>
    <ul>
      <li>Drink an extra four glasses (eight ounces each) of non-alcoholic liquids.</li>
      <li>Keep your bandage on and dry for the next five hours, and do not do heavy exercising or lifting.
      </li>
      <li>If the needle site starts to bleed, raise your arm straight up and press on the site until the bleeding stops.</li>
      <li>Because you could experience dizziness or loss of strength, use caution if you plan to do anything that could put you or others at risk of harm.</li>
      <li>Eat healthy meals and consider adding iron-rich foods to your regular diet, or discuss taking an iron supplement with your health care provider, to replace the iron lost with blood donation.</li>
      <li><font style="font-weight: 600;">If you get a bruise:</font>  Apply ice to the area intermittently for 10-15 minutes during the first 24 hours. Thereafter, apply warm, moist heat to the area intermittently for 10-15 minutes. A rainbow of colors may occur for about 10 days.</li>
      <li><font style="font-weight: 600;">If you get dizzy or lightheaded:</font>  Stop what you are doing, lie down, and raise your feet until the feeling passes and you feel well enough to safely resume activities.</li>
      <li><font style="font-weight: 600;">And remember to enjoy the feeling of knowing you have helped save lives!</font></li>
      <li><font style="font-weight: 600;">Schedule your next appointment.</font></li>
    </ul>
  </p>
</div>

<button class="accordion">How long does a blood donation take?</button>
<div class="panel">
  <p>The entire process takes about one hour and 15 minutes; the actual donation of a pint of whole blood unit takes eight to 10 minutes. However, the time varies slightly with each person depending on several factors including the donor’s health history and attendance at the blood drive.</p>
</div>

<button class="accordion">How often can I donate blood?</button>
<div class="panel">
  <p>You must wait at least eight weeks (56 days) between donations of whole blood and 16 weeks (112 days) between Power Red donations. Platelet apheresis donors may give every 7 days up to 24 times per year. Regulations are different for those giving blood for themselves (autologous donors).</p>
</div>

<button class="accordion">Who can donate blood?</button>
<div class="panel">
  <p>In most states, donors must be age 17 or older. Some states allow donation by 16-year-olds with a signed parental consent form. Donors must weigh at least 110 pounds and be in good health. Additional eligibility criteria apply.</p>
</div>

<button class="accordion">How long will it take to replenish the pint of blood I donate?</button>
<div class="panel">
  <p>The plasma from your donation is replaced within about 24 hours. Red cells need about four to six weeks for complete replacement. That’s why at least eight weeks are required between whole blood donations.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("activefaq");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
    </section>

    <footer class="u-clearfix u-footer u-grey-80" id="sec-d833"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="600" data-image-height="761">
          <img src="images/blood-drop.png" class="u-logo-image u-logo-image-1">
        </a>
        <h1 class="u-custom-font u-font-lobster u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">Blood Donation</h1>
      </div></footer>
    <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px" class="u-back-to-top u-icon u-icon-rounded u-opacity u-opacity-85 u-palette-1-base u-spacing-10" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  </body>
</html>
<?php
  }else{
  	header("Location: html/index.html");
   	exit;
  }
 ?>