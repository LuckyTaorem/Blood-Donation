<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<?php include 'cHeader.php'; ?>

<div class="profile_container">
    <div class="input-group mb-3" style="width:30%; margin-left:10%; margin-top:2%;">
        <input type="text" placeholder="Search user by name or email" id="searchText" class="form-control">
        <button class="btn btn-primary" id="searchbtn">
            <i class="fa fa-search"></i>	
        </button>       
    </div>

    <ul id="chatList" class="list-group mvh-50 overflow-auto" style="width:30%; margin-left:10%;"></ul>
    
    <div class="all_users">
        <h3>All Users</h3>
        <div class="usersWrapper">
            <?php
            if ($all_users) {
                
                foreach ($all_users as $row) {
                    $emailr = $row->email;
                    $grav_url_60s = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($emailr))) . "?d=NotFound&s=60";
                    echo '<div class="user_box">';
                    if (imageExists($grav_url_60s))
                        echo '<div class="user_img"><img src="' . $grav_url_60s . '" alt="Profile image" style="width:100%;"></div>';
                    else
                        echo '<div class="user_img"><img src="../profile_images/' . $row->p_p . '" alt="Profile image" style="width:100%;"></div>';
                    echo '<div class="user_info"><span>' . $row->name . '</span>
                          <span><a href="user_profile.php?id=' . $row->user_id . '" class="see_profileBtn">See profile</a></span>
                          </div></div>';
                }
            } else {
                echo '<h4>There is no user!</h4>';
            }
            ?>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Search functionality remains the same
        $("#searchText").on("input", function() {
            var searchText = $(this).val();
            if (searchText == "") return;

            $.post('../app/ajax/search.php', {
                    key: searchText
                },
                function(data, status) {
                    $("#chatList").html(data);
                }
            );
        });

        $("#searchbtn").on("click", function() {
            var searchText = $("#searchText").val();
            if (searchText == "") return;

            $.post('../app/ajax/search.php', {
                    key: searchText
                },
                function(data, status) {
                    $("#chatList").html(data);
                }
            );
        });
    });
</script>
</body>
</html>
