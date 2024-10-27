<?php
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
        header('Location: index.php');
        exit;
    }
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"media="screen">
    <link rel="stylesheet" href="../css/admin2.css" media="screen">
    <link rel="stylesheet" href="../css/sidemenu.css" media="screen">
   </head>
   <body class="u-body" style="background: #141e30;"><header class="u-black u-clearfix u-header u-header" id="sec-8c91"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-image u-image-circle u-preserve-proportions u-image-1" onclick="openMenu()" alt="" data-image-width="1280" data-image-height="1280"><img src="../profile_images/admin.jpg" style="border:2px solid white; width:100%;border-radius:100%;"></div>
        <h3 class="u-custom-font u-font-lobster u-headline u-text u-text-default u-text-1">
          <a href="#">ADMIN</a>
        </h3>
      </div></header> 
<?php
include 'sidebar.php';
?>