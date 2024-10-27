<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;top:0;text-align: center;" id="menu">
      <button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
      <center> <img src="../profile_images/admin.jpg" alt="Profile image">
      <h6 style="font-weight:bold;">Admin</h6>  
      <br>
      <a href="admin.php" rel="noopener noreferrer"style="text-decoration:none;">Blog Post</a>
        <a href="jobapplicant.php" rel="noopener noreferrer"style="text-decoration:none;">Job Applicant</a>
        <a href="blood_camp.php" rel="noopener noreferrer">Blood Camps</a>
        <a href="donorDetails.php" rel="noopener noreferrer">Donor Details</a>
    <a href="logout.php" rel="noopener noreferrer"style="text-decoration:none;" id="logout">Logout</a>
    </div>
    </center>
    <script>
      function openMenu() {
      document.getElementById("menu").style.display = "block";
    }
    
    function closeMenu() {
      document.getElementById("menu").style.display = "none";
    }
    </script>