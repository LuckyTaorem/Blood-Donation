<!DOCTYPE html>
<html>
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
  <body>

    <div class="login-box">
      <!-- Display any info -->
      <?php if(isset($_REQUEST['info'])){ ?>
        <?php if($_REQUEST['info'] == "fail"){?>
                <div class="alert alert-danger" role="alert">
                    Invalid username or password!
                </div>
            <?php }?>
        <?php } ?>
        <h2>Admin Login</h2>
        <form action = "admindb.php" onsubmit = "return adminLogin()" method="POST">
          <div class="user-box">
            <input type="text" name="username" required="" autocomplete="off">
            <label>username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="" autocomplete="off">
            <label>Password</label>
          </div>
          <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button>
                Submit
      </button>
          </a>
        </form>
      </div>
      <script>  
            function adminLogin()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
  </body>
</html>