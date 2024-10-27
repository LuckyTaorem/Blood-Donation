<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;top:0;text-align: center;" id="menu">
      <button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
        <img src="../images/placeholder.png">
        <br>
        <input type="button" style="margin-top: 2vh;" value="Login" data-href="../newuser/login.php">
        <p>OR</p>
        <p>Are you new here?</p>
        <input type="button"value="Create an Account" data-href="../newuser/signup.php">
    </div>
    <script>
      function openMenu() {
      document.getElementById("menu").style.display = "block";
    }
    
    function closeMenu() {
      document.getElementById("menu").style.display = "none";
    }
    </script> 