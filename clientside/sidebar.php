<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;top:0;text-align: center;" id="menu">
      <button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button><?php
      $grav_url_80 = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $emailh ) ) ) . "?d=NotFound&s=80";
      ?>
      <center>
        <?php
if (imageExists($grav_url_80)) echo '<img src="'.$grav_url_80.'" alt="" style="border-radius:100%;border:1px solid black;" />';
            else echo '<img src="../profile_images/'.$user['p_p'].'" alt="Profile image" style="border-radius:100%;border:1px solid black;width:150px; height:150px; margin:auto;">';
        ?>
      
    </center>
        
        <h6><?php echo  $user['name'];?></h6>
        <a href="myprofile.php" rel="noopener noreferrer" style="text-decoration:none;">My Profile</a>
        <a href="allusers.php" rel="noopener noreferrer"style="text-decoration:none;">All users</a>
          <a href="request.php" rel="noopener noreferrer"style="text-decoration:none;">Requests<span class="badge <?php
                  if($get_req_num > 0){
                      echo 'redBadge';
                  }
                  ?>" style="border-radius:100%; background-color:red;color:white;"><?php echo $get_req_num;?></span></a>
    <a href="friends.php" rel="noopener noreferrer"style="text-decoration:none;">Friends<span class="badge" style="color:black; border-radius:100%;"><?php echo $get_frnd_num;?></span></a>
        <a href="messages.php" rel="noopener noreferrer"style="text-decoration:none;">Messages</a>
        <a href="rssreader.php?title=blood-donation" rel="noopener noreferrer"style="text-decoration:none;">RSS Zone</a>
        <a href="blog.php" rel="noopener noreferrer"style="text-decoration:none;">Blog</a>
        <a href="blood_camp.php" rel="noopener noreferrer"style="text-decoration:none;">Blood Camp</a>
    <a href="game.php" rel="noopener noreferrer"style="text-decoration:none;">Games</a>
    <a href="logout.php" rel="noopener noreferrer" id="logout"style="text-decoration:none;">Logout</a>
    </div>
    <script>
      function openMenu() {
      document.getElementById("menu").style.display = "block";
    }
    
    function closeMenu() {
      document.getElementById("menu").style.display = "none";
    }
    </script>