<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/wholepage.css" media="screen">
    <link rel="stylesheet" href="../css/style.css" media="screen">
    <link rel="stylesheet" href="../css/sidemenu.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/wholepage.js" defer=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto+Condensed:300,300i,400,400i,700,700i|Lobster:400">
  </head>
  <body onload = "getLocation();" data-home-page="index.php" data-home-page-title="Home" class="u-body"><header class="u-clearfix u-header u-header" id="sec-8c91"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="1500" data-image-height="1774">
          <img src="../images/blood.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-circle u-preserve-proportions u-image-2" onclick="openMenu()" alt="" data-image-width="1280" data-image-height="1280"><img src="../images/placeholder.png" style="width:100%;border-radius:100%;"></div>
        <h3 class="u-custom-font u-font-lobster u-headline u-hidden-xs u-text u-text-default u-text-1">
          <a href="#">Blood Donation</a>
        </h3>
        <form action="search.php" method="get" class="u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8150"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-8150" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
            </span>
          </button>
          <input class="u-search-input" type="search" name="search" value="" placeholder="Search Blood">
        </form>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a id="homenav" class="u-border-hover-palette-1-light-1 u-button-style u-hover-grey-10 u-nav-link u-text-grey-90 u-text-hover-grey-90" href="index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><div class="subnav"><a id="aboutnav" class="u-border-hover-palette-1-light-1 u-button-style u-hover-grey-10 u-nav-link u-text-grey-90 u-text-hover-grey-90" href="#" style="padding: 10px 20px;">About <i class="fa fa-caret-down"></i></a>
<div class="subnav-content">
      <a href="about.php">Our Team</a>
      <a href="career.php">Careers</a>
    </div>
    </div>
    <style>
      .subnav {
  float: left;
  overflow: hidden;
}

.subnav #aboutnav {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover #aboutnav {
  background-color: lightgray;
}

.subnav-content {
  display: none;
  position: absolute;
  background-color: white;
  width: fit-content;
  z-index: 999;
}

.subnav-content a {
  float: left;
  color: black;
  text-decoration: none;
  font-size: 16px;
  padding: 14px 16px;
}

.subnav-content a:hover {
  background-color: lightgray;
  color: black;
  text-decoration: none;
  width:100%;
}

.subnav:hover .subnav-content {
  display: block;
}
    </style>
    </li><li class="u-nav-item"><a id="registernav" class="u-border-hover-palette-1-light-1 u-button-style u-hover-grey-10 u-nav-link u-text-grey-90 u-text-hover-grey-90" href="register.php" style="padding: 10px 20px;">Register</a>
</li><li class="u-nav-item"><a id="contactnav" class="u-border-hover-palette-1-light-1 u-button-style u-hover-grey-10 u-nav-link u-text-grey-90 u-text-hover-grey-90" href="contact.php" style="padding: 10px 20px;">Contact</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="register.php" style="padding: 10px 20px;">Register</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="about.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="career.php" style="padding: 10px 20px;">Career</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact.php" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.php" style="padding: 10px 20px;">Login</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
<?php
include 'sidebar.php';
?>