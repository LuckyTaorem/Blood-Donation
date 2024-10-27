<?php
include 'cHeader.php';
?>
    <div class="profile_container">
        
        <div class="inner_profile">
        <div class="all_users">
            <h3>All friends</h3>
            <div class="usersWrapper">
                <?php
                if($get_frnd_num > 0){
                    foreach($get_all_friends as $row){
                        $emailr = $row->email;
                        $grav_url_60s = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($emailr))) . "?d=404&s=60";
                        ?>
                        <div class="user_box">
                                <?php
                                 if (imageExists($grav_url_60s))
                                 echo '<div class="user_img"><img src="' . $grav_url_60s . '" alt="Profile image" style="width:100%;"></div>';
                             else
                                 echo '<div class="user_img"><img src="../profile_images/' . $row->p_p . '" alt="Profile image" style="width:100%;"></div>';
                                echo '<div class="user_info">
                                <span>'.$row->name.'</span>
                                <span style="margin-top:5px;"><a href="user_profile.php?id='.$row->user_id.'" class="see_profileBtn">See profile</a></span>
                                <a href="msg.php?user='.$row->email.'" class="see_profileBtn">Send Message</a>
                                </div>
                            </div>';
                    }
                }
                else{
                    echo '<h4>You have no friends!</h4>';
                }
                ?>

            

            </div>
        </div>
        
    </div>
    
</body>
</html>