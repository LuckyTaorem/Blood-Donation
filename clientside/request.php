<?php
include 'cHeader.php';
?>
<div class="profile_container">

    <div class="inner_profile">

        <div class="all_users">
            <h3>All Friends Requests:</h3>
            <div class="usersWrapper">
                <?php
                if ($get_req_num > 0) {
                    foreach ($get_all_req_sender as $row) {
                        $emailr = isset($row->email) ? $row->email : '';
                        $grav_url_60s = $emailr ? "https://www.gravatar.com/avatar/" . md5(strtolower(trim($emailr))) . "?d=404&s=120" : '';
                        $default_image = "../profile_images/" . $row->p_p;
                        ?>
                        <div class="user_box">'
                            <?php
                            if ($grav_url_60s && imageExists($grav_url_60s)) {
                                echo '<div class="user_img"><img src="' . $grav_url_60s . '" alt="Profile image" style="width:100%;"></div>';
                            } else {
                                echo '<div class="user_img"><img src="' . $default_image . '" alt="Profile image" style="width:100%;"></div>';
                            }
                            echo '<div class="user_info"><span>' . $row->name . '</span>
                                <span><a href="user_profile.php?id=' . $row->sender . '" class="see_profileBtn">See profile</a></div>
                            </div>';
                    }
                } else {
                    echo '<h4>You have no friend requests!</h4>';
                }
                ?>
                </div>
            </div>

        </div>
        </body>

        </html>