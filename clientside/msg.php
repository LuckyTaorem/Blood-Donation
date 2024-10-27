<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
<?php 
include 'cHeader.php';
  	if (!isset($_GET['user'])) {
  		header("Location: messages.php");
  		exit;
  	}

  	# Getting User data data
  	$chatWith = getUser($_GET['user'], $conn);

  	if (empty($chatWith)) {
  		header("Location: messages.php");
  		exit;
  	}

  	$chats = getChats($_SESSION['user_id'], $chatWith['user_id'], $conn);

  	opened($chatWith['user_id'], $conn, $chats);
            // FETCH ALL USERS WHERE ID IS NOT EQUAL TO MY ID
            $all_users = $user_obj->all_users($_SESSION['user_id']);
            // REQUEST NOTIFICATION NUMBER
            $get_req_num = $frnd_obj->request_notification($_SESSION['user_id'], false);
            // TOTAL FRIENDS
            $get_frnd_num = $frnd_obj->get_all_friends($_SESSION['user_id'], false);
?>
	<div class="d-flex
             justify-content-center
             align-items-center
             "style="margin-top:5vh;margin-bottom:5vh;">
    <div class="w-500 shadow p-4 rounded" style="width:50vw;">

    	   <div class="d-flex align-items-center">
    	   	  <?php
				$emailr = $chatWith['email'];
				$grav_url_60s = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($emailr))) . "?d=NotFound&s=60";
				if (imageExists($grav_url_60s))
				echo '<img style="width:80px; height:80px;" src="'.$grav_url_60s.'"
    	   	       class="w-15 rounded-circle">';
			else
				echo '<img style="width:80px; height:80px;" src="../profile_images/'.$chatWith['p_p'].'"
    	   	       class="w-15 rounded-circle">';
			  ?>

               <h3 class="display-4 fs-sm m-2">
               	  <?=$chatWith['name']?> <br>
               	  <div class="d-flex
               	              align-items-center"
               	        title="online">
               	    <?php
                        if (last_seen($chatWith['last_seen']) == "Active") {
               	    ?>
               	        <div class="online"></div>
               	        <small class="d-block p-1">Online</small>
               	  	<?php }else{ ?>
               	         <small class="d-block p-1">
               	         	Last seen:
               	         	<?=last_seen($chatWith['last_seen'])?>
               	         </small>
               	  	<?php } ?>
               	  </div>
               </h3>
    	   </div>

    	   <div class="shadow p-4 rounded
    	               d-flex flex-column
    	               mt-2 chat-box"
    	        id="chatBox" style="background-color:#E1D9D1;">
    	        <?php 
                     if (!empty($chats)) {
                     foreach($chats as $chat){
                     	if($chat['from_id'] == $_SESSION['user_id'])
                     	{ ?>
						<p class="rtext align-self-end
						        border rounded p-2 mb-1">
						    <?=$chat['message']?> 
						    <small class="d-block">
						    	<?=$chat['created_at']?>
						    </small>      	
						</p>
                    <?php }else{ ?>
					<p class="ltext border 
					         rounded p-2 mb-1">
					    <?=$chat['message']?> 
					    <small class="d-block">
					    	<?=$chat['created_at']?>
					    </small>      	
					</p>
                    <?php } 
                     }	
    	        }else{ ?>
               <div class="alert alert-info 
    				            text-center">
				   <i class="fa fa-comments d-block fs-big"></i>
	               No messages yet, Start the conversation
			   </div>
    	   	<?php } ?>
    	   </div>
    	   <div class="input-group mb-3 d-flex">
    <textarea data-emoji-picker="true" id="message" class="form-control me-2"
              placeholder="Type to send messages..." style="height: 38px; resize: none;"></textarea>

			  <button class="btn btn-primary" id="sendBtn">
        <i class="fa fa-paper-plane"></i>
    </button>
    
</div>


    </div>
    <!-- <script src="../js/emojiPicker.js"></script> -->
  <script>
    (() => {
      new EmojiPicker()
    })()
  </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 

<script>
	var scrollDown = function(){
        let chatBox = document.getElementById('chatBox');
        chatBox.scrollTop = chatBox.scrollHeight;
	}

	scrollDown();

	$(document).ready(function(){
      
      $("#sendBtn").on('click', function(){
      	message = $("#message").val();
      	if (message == "") return;

      	$.post("../app/ajax/insert.php",
      		   {
      		   	message: message,
      		   	to_id: <?=$chatWith['user_id']?>
      		   },
      		   function(data, status){
                  $("#message").val("");
                  $("#chatBox").append(data);
                  scrollDown();
      		   });
      });

      /** 
      auto update last seen 
      for logged in user
      **/
      let lastSeenUpdate = function(){
      	$.get("../app/ajax/update_last_seen.php");
      }
      lastSeenUpdate();
      /** 
      auto update last seen 
      every 10 sec
      **/
      setInterval(lastSeenUpdate, 10000);



      // auto refresh / reload
      let fechData = function(){
      	$.post("../app/ajax/getMessage.php", 
      		   {
      		   	id_2: <?=$chatWith['user_id']?>
      		   },
      		   function(data, status){
                  $("#chatBox").append(data);
                  if (data != "") scrollDown();
      		    });
      }

      fechData();
      /** 
      auto update last seen 
      every 0.5 sec
      **/
      setInterval(fechData, 500);
    
    });
</script>
 </body>
 </html>