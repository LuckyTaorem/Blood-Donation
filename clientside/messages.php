<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<?php 
include 'cHeader.php';
?>
<link rel="stylesheet" href="../css/style.css">
	<div class="d-flex
             justify-content-center
             align-items-center
             "style="margin-top:10vh;">
    <div class="p-2 w-400
                rounded shadow"  style="width:50vw;width:60%;">

    		<ul id="chatList"
    		    class="list-group mvh-50 overflow-auto">
    			<?php if (!empty($conversations)) { ?>
    			    <?php 

    			    foreach ($conversations as $conversation){ 
						$emailr = $conversation['email'];
						?>
	    			<li class="list-group-item">
	    				<a href="msg.php?user=<?=$emailr?>"
	    				   class="d-flex
	    				          justify-content-between
	    				          align-items-center p-2"style="width:100%;">
	    					<div class="d-flex
	    					            align-items-center" style="width:100%;">
	    					    <?php
									$grav_url_60s = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($emailr))) . "?d=NotFound&s=60";
									if (imageExists($grav_url_60s))
									echo '<img style="width:80px;height:80px; border-radius:80px;" src="'.$grav_url_60s.'"';
								else
									echo '<img style="width:80px;height:80px; border-radius:80px;" src="../profile_images/'.$conversation['p_p'].'"';
								?>
	    					    <h4 style="margin-left:5%;color:black; width:100%;">
	    					    	<?=$conversation['name']?><br>
                      <small style="font-size:15px; color:darkgray;">
                        <?php 
                          echo lastChat($_SESSION['user_id'], $conversation['user_id'], $conn);
                        ?>
                      </small>
	    					    </h4>         	
	    					</div>
	    					<?php if (last_seen($conversation['last_seen']) == "Active") { ?>
		    					<div title="online">
		    						<div class="online"></div>
		    					</div>
	    					<?php } ?>
	    				</a>
	    			</li>
    			    <?php } ?>
    			<?php }else{ ?>
    				<div class="alert alert-info 
    				            text-center">
					   <i class="fa fa-comments d-block fs-big"></i>
                       No messages yet, Start the conversation
					</div>
    			<?php } ?>
    		</ul>
    	</div>
    </div>
	  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
      
      // Search
       $("#searchText").on("input", function(){
       	 var searchText = $(this).val();
         if(searchText == "") return;
         $.post('../app/ajax/search.php', 
         	     {
         	     	key: searchText
         	     },
         	   function(data, status){
                  $("#chatList").html(data);
         	   });
       });

       // Search using the button
       $("#serachBtn").on("click", function(){
       	 var searchText = $("#searchText").val();
         if(searchText == "") return;
         $.post('../app/ajax/search.php', 
         	     {
         	     	key: searchText
         	     },
         	   function(data, status){
                  $("#chatList").html(data);
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

    });
</script>
</div>
</body>
</html>
